<?php

namespace App\Http\Controllers\UI\Darts\ZeroOne;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Gate;
use Session;
use App\Models\DartsGame;
use App\Models\DartsScore;
use App\Models\User;

class PlayersController extends Controller
{
##################################################################################################################
#  ██████╗ ██████╗ ███╗   ██╗███████╗████████╗██████╗ ██╗   ██╗ ██████╗████████╗
# ██╔════╝██╔═══██╗████╗  ██║██╔════╝╚══██╔══╝██╔══██╗██║   ██║██╔════╝╚══██╔══╝
# ██║     ██║   ██║██╔██╗ ██║███████╗   ██║   ██████╔╝██║   ██║██║        ██║   
# ██║     ██║   ██║██║╚██╗██║╚════██║   ██║   ██╔══██╗██║   ██║██║        ██║   
# ╚██████╗╚██████╔╝██║ ╚████║███████║   ██║   ██║  ██║╚██████╔╝╚██████╗   ██║   
#  ╚═════╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝  ╚═════╝   ╚═╝   
##################################################################################################################
   public function __construct()
   {
      $this->middleware('auth');
   }


##################################################################################################################
# ██╗███╗   ██╗██████╗ ███████╗██╗  ██╗
# ██║████╗  ██║██╔══██╗██╔════╝╚██╗██╔╝
# ██║██╔██╗ ██║██║  ██║█████╗   ╚███╔╝ 
# ██║██║╚██╗██║██║  ██║██╔══╝   ██╔██╗ 
# ██║██║ ╚████║██████╔╝███████╗██╔╝ ██╗
# ╚═╝╚═╝  ╚═══╝╚═════╝ ╚══════╝╚═╝  ╚═╝
// Display a list of resources
##################################################################################################################
   public function index($gameID)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-access'), 403);

      $game = DartsGame::find($gameID);
      $players = zeroOnePlayers($gameID);
      $nextShot = zeroOneNextShot($gameID);
      $player = DB::table('dart__players')->where('game_id', $gameID)->where('shooting_order', $nextShot)->first();
      $user = User::where('id', $player->user_id)->first();
      $remainingScore = $game->type - zeroOnePlayerScore($gameID, $player->user_id)->sum('score');

      // Check if any one of the players has won the game (remaining score = 0)
      $gameOver = DB::table('dart__scores')->where('game_id', $gameID)->where('remaining', 0)->first();
      
      foreach($players as $p)
      {
         if ($gameOver){
            $gameDone = 1;
         } else {
            $gameDone = 0;
         }
      }

      return view('UI.darts.01.players.index', compact('game','nextShot','players','player','user','remainingScore','gameDone'));
   }


##################################################################################################################
# ███████╗████████╗ ██████╗ ██████╗ ███████╗
# ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
# ███████╗   ██║   ██║   ██║██████╔╝█████╗  
# ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
# ███████║   ██║   ╚██████╔╝██║  ██║███████╗
# ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
##################################################################################################################
   public function store(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-access'), 403);
      
      $this->validate($request, [
         // 'game_id' => 'required',
         // 'user_id' => 'required',
         'score' => 'required|integer|max:180',
         'remainingScore*' => 'required',
      ],
      [
         // 'user_id.required' => 'Please select a player.',
         'score.required' => 'Please enter a score.',
         'score.integer' => 'Score must be a number.',
         'score.max' => 'Score must be 180 or less.'
      ]);

      // Is the entered score less than 0?
      if($request->score < 0)
      {
         // Session::flash('dart_error_1','Invalid Score! You need to enter a score above 0. Please try again.');
         Session::flash('dart_error_1');
         return redirect()->back();
      }

      // Is the entered score greater than 180?
      // if($request->score > 180){
      //    Session::flash('dart_error_2','Invalid Score! Total score cannot exceed 180. Please try again.');
      //    return redirect()->back();
      // }

      // Would the entered score leave 1 remaining which is not possible
      if($request->remainingScore - $request->score == 1)
      {
         $score = new DartsScore;
            $score->user_id = $request->user_id;
            $score->game_id = $request->game_id;
            $score->score = 0;
            $score->remaining = $request->remainingScore;
         $score->save();

         // Session::flash('dart_error_2','This score cannot be registered as it would leave an impossibility to finish with a Double Out. A value of 0 will be added to the scoresheet.');
         Session::flash('dart_error_2');
         return redirect()->back();
      }

      // 0 score entered
      if($request->score == 0)
      {
         $score = new DartsScore;
            $score->user_id = $request->user_id;
            $score->game_id = $request->game_id;
            $score->score = 0;
            $score->remaining = $request->remainingScore;
         $score->save();

         // Session::flash('dart_error_3','A score value of 0 has been added to the scoresheet.');
         Session::flash('dart_error_3');
         return redirect()->back();
      }

      // Is the entered score greater than the remaining score?
      if($request->score > $request->remainingScore)
      {
         $score = new DartsScore;
            $score->user_id = $request->user_id;
            $score->game_id = $request->game_id;
            $score->score = 0;
            $score->remaining = $request->remainingScore;
         $score->save();

         // Session::flash('dart_error_4','The registered score is higher than the required score to finish. A value of 0 will be added to the scoresheet.');
         Session::flash('dart_error_4');
         return redirect()->back();
      }

      // All checks passed, enter the score in the DB
      $score = new DartsScore;
         $score->user_id = $request->user_id;
         $score->game_id = $request->game_id;
         $score->score = $request->score;
         $score->remaining = $request->remainingScore - $request->score;
      $score->save();

      // Change the game status to In Progress 
      $game = DartsGame::find($request->game_id);
         $game->status = 'In Progress';
      $game->save();

      if(zeroOneGameWinner($game) == true) {
         $game = DartsGame::find($request->game_id);
            $game->status = 'Completed';
         $game->save();
      }

      // dd($score->score);
      $score = $score->score;
      // Session::flash('dart_success','The scoresheet has been updated.');
      if($score > 0 && $score <= 20 && $game->status != 'Completed')
      {
         Session::flash('dart_success_0_20');
      }
      else if($score >= 21 && $score <= 40 && $game->status != 'Completed')
      {
         Session::flash('dart_success_21_40');
      }
      else if($score >= 41 && $score <= 60 && $game->status != 'Completed')
      {
         Session::flash('dart_success_41_60');
      }
      else if($score >= 61 && $score <= 120 && $game->status != 'Completed')
      {
         Session::flash('dart_success_61_120');
      }
      else if($score >= 121 && $score <= 179 && $game->status != 'Completed')
      {
         Session::flash('dart_success_121_179');
      }
      else if($score == 180 && $game->status != 'Completed')
      {
         Session::flash('dart_success_180');
      }

      // return redirect()->back();
      return redirect()->back()->with($score);
   }

}
