<?php

namespace App\Http\Controllers\UI\Darts\Baseball;

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
      // $players = zeroOnePlayers($gameID);
      // $nextShot = zeroOneNextShot($gameID);
      // $player = DB::table('dart__players')->where('game_id', $gameID)->where('shooting_order', $nextShot)->first();
      // $user = User::where('id', $player->user_id)->first();
      // $remainingScore = $game->type - zeroOnePlayerScore($gameID, $player->user_id)->sum('score');

      // // Check if any one of the players has won the game (remaining score = 0)
      // $gameOver = DB::table('dart__scores')->where('game_id', $gameID)->where('remaining', 0)->first();
      
      // foreach($players as $p){
      //    if ($gameOver){
      //       $gameDone = 1;
      //    } else {
      //       $gameDone = 0;
      //    }
      // }

      // return view('darts.01.players.index', compact('game','nextShot','players','player','user','remainingScore','gameDone'));
      $innings = [1,2,3,4,5,6,7,8,9];
      $players = baseballPlayers($gameID);
      $scores = [1,2,3,4,5,6,7,8,9];

      return view('UI.darts.baseball.players.index', compact('game','innings','players','scores'));
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

      // $players = baseballPlayers($request->gameID);
      // dd($players);

      $data = $request->all();
      dd($data);


      // dd($request);
      foreach($data as $key => $value){
         echo $key . "<br />";
         // foreach($key as $k){
         //    echo $k . "<br />";
         // }
      }


      




     // Session::flash('dart-success','The game as been marked as completed.');
      // return redirect()->back();
   }


##################################################################################################################
#  ██████╗ ██████╗ ███╗   ███╗██████╗ ██╗     ███████╗████████╗███████╗
# ██╔════╝██╔═══██╗████╗ ████║██╔══██╗██║     ██╔════╝╚══██╔══╝██╔════╝
# ██║     ██║   ██║██╔████╔██║██████╔╝██║     █████╗     ██║   █████╗  
# ██║     ██║   ██║██║╚██╔╝██║██╔═══╝ ██║     ██╔══╝     ██║   ██╔══╝  
# ╚██████╗╚██████╔╝██║ ╚═╝ ██║██║     ███████╗███████╗   ██║   ███████╗
#  ╚═════╝ ╚═════╝ ╚═╝     ╚═╝╚═╝     ╚══════╝╚══════╝   ╚═╝   ╚══════╝
##################################################################################################################
   public function completed($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-access'), 403);
      
      // Change the game status to Completed
      $game = DartsGame::find($id);
         $game->status = 'Completed';
      $game->save();

      Session::flash('dart-success','The game as been marked as completed.');
      return redirect()->route('darts.games.board');
   }
}
