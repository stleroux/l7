<?php

namespace App\Http\Controllers\UI\Darts\Cricket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Gate;
use Session;
use App\Models\User;
use App\Models\DartsGame;
use App\Models\DartsScore;


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
      $players = cricketPlayers($gameID);
      // dd($players);
      $possibleScores = [15,16,17,18,19,20,25];
      // dd($possibleScores);

      // $twenty_1_count_plus = Score::where('team_id',1)->where('score',20)->where('game_id',$game->id)->count();
      // $twenty_1_count_minus = Score::where('team_id',1)->where('score',-20)->where('game_id',$game->id)->count();
      // $twenty_1_count = $twenty_1_count_plus - $twenty_1_count_minus;
      // $twenty_1_points = ($twenty_1_count * 20) - 60;
      // if($twenty_1_points > 0) {
      //    $twenty_1_total_points = ($twenty_1_count * 20) - 60;
      // } else {
      //    $twenty_1_total_points = 0;
      // }

      // $nineteen_1_count_plus = Score::where('team_id',1)->where('score',19)->where('game_id',$game->id)->count();
      // $nineteen_1_count_minus = Score::where('team_id',1)->where('score',-19)->where('game_id',$game->id)->count();
      // $nineteen_1_count = $nineteen_1_count_plus - $nineteen_1_count_minus;
      // $nineteen_1_points = ($nineteen_1_count * 19) - 57;
      // if($nineteen_1_points > 0) {
      //    $nineteen_1_total_points = ($nineteen_1_count * 19) - 57;
      // } else {
      //    $nineteen_1_total_points = 0;
      // }

      // $eighteen_1_count_plus = Score::where('team_id',1)->where('score',18)->where('game_id',$game->id)->count();
      // $eighteen_1_count_minus = Score::where('team_id',1)->where('score',-18)->where('game_id',$game->id)->count();
      // $eighteen_1_count = $eighteen_1_count_plus - $eighteen_1_count_minus;
      // $eighteen_1_points = ($eighteen_1_count * 18) - 54;
      // if($eighteen_1_points > 0) {
      //    $eighteen_1_total_points = ($eighteen_1_count * 18) - 54;
      // } else {
      //    $eighteen_1_total_points = 0;
      // }

      // $seventeen_1_count_plus = Score::where('team_id',1)->where('score',17)->where('game_id',$game->id)->count();
      // $seventeen_1_count_minus = Score::where('team_id',1)->where('score',-17)->where('game_id',$game->id)->count();
      // $seventeen_1_count = $seventeen_1_count_plus - $seventeen_1_count_minus;
      // $seventeen_1_points = ($seventeen_1_count * 17) - 51;
      // if($seventeen_1_points > 0) {
      //    $seventeen_1_total_points = ($seventeen_1_count * 17) - 51;
      // } else {
      //    $seventeen_1_total_points = 0;
      // }

      // $sixteen_1_count_plus = Score::where('team_id',1)->where('score',16)->where('game_id',$game->id)->count();
      // $sixteen_1_count_minus = Score::where('team_id',1)->where('score',-16)->where('game_id',$game->id)->count();
      // $sixteen_1_count = $sixteen_1_count_plus - $sixteen_1_count_minus;
      // $sixteen_1_points = ($sixteen_1_count * 16) - 48;
      // if($sixteen_1_points > 0) {
      //    $sixteen_1_total_points = ($sixteen_1_count * 16) - 48;
      // } else {
      //    $sixteen_1_total_points = 0;
      // }

      // $fifteen_1_count_plus = Score::where('team_id',1)->where('score',15)->where('game_id',$game->id)->count();
      // $fifteen_1_count_minus = Score::where('team_id',1)->where('score',-15)->where('game_id',$game->id)->count();
      // $fifteen_1_count = $fifteen_1_count_plus - $fifteen_1_count_minus;
      // $fifteen_1_points = ($fifteen_1_count * 15) - 45;
      // if($fifteen_1_points > 0) {
      //    $fifteen_1_total_points = ($fifteen_1_count * 15) - 45;
      // } else {
      //    $fifteen_1_total_points = 0;
      // }

      // $bull_1_count_plus = Score::where('team_id',1)->where('score',25)->where('game_id',$game->id)->count();
      // $bull_1_count_minus = Score::where('team_id',1)->where('score',-25)->where('game_id',$game->id)->count();
      // $bull_1_count = $bull_1_count_plus - $bull_1_count_minus;
      // $bull_1_points = ($bull_1_count * 25) - 75;
      // if($bull_1_points > 0) {
      //    $bull_1_total_points = ($bull_1_count * 25) - 75;
      // } else {
      //    $bull_1_total_points = 0;
      // }

      // $player_1_total_points =
      //    $twenty_1_total_points +
      //    $nineteen_1_total_points +
      //    $eighteen_1_total_points +
      //    $seventeen_1_total_points +
      //    $sixteen_1_total_points +
      //    $fifteen_1_total_points +
      //    $bull_1_total_points
      // ;


      // $twenty_2_count_plus = Score::where('team_id',2)->where('score',20)->where('game_id',$game->id)->count();
      // $twenty_2_count_minus = Score::where('team_id',2)->where('score',-20)->where('game_id',$game->id)->count();
      // $twenty_2_count = $twenty_2_count_plus - $twenty_2_count_minus;
      // $twenty_2_points = ($twenty_2_count * 20) - 60;
      // if($twenty_2_points > 0) {
      //    $twenty_2_total_points = ($twenty_2_count * 20) - 60;
      // } else {
      //    $twenty_2_total_points = 0;
      // }

      // $nineteen_2_count_plus = Score::where('team_id',2)->where('score',19)->where('game_id',$game->id)->count();
      // $nineteen_2_count_minus = Score::where('team_id',2)->where('score',-19)->where('game_id',$game->id)->count();
      // $nineteen_2_count = $nineteen_2_count_plus - $nineteen_2_count_minus;
      // $nineteen_2_points = ($nineteen_2_count * 19) - 57;
      // if($nineteen_2_points > 0) {
      //    $nineteen_2_total_points = ($nineteen_2_count * 19) - 57;
      // } else {
      //    $nineteen_2_total_points = 0;
      // }

      // $eighteen_2_count_plus = Score::where('team_id',2)->where('score',18)->where('game_id',$game->id)->count();
      // $eighteen_2_count_minus = Score::where('team_id',2)->where('score',-18)->where('game_id',$game->id)->count();
      // $eighteen_2_count = $eighteen_2_count_plus - $eighteen_2_count_minus;
      // $eighteen_2_points = ($eighteen_2_count * 18) - 54;
      // if($eighteen_2_points > 0) {
      //    $eighteen_2_total_points = ($eighteen_2_count * 18) - 54;
      // } else {
      //    $eighteen_2_total_points = 0;
      // }

      // $seventeen_2_count_plus = Score::where('team_id',2)->where('score',17)->where('game_id',$game->id)->count();
      // $seventeen_2_count_minus = Score::where('team_id',2)->where('score',-17)->where('game_id',$game->id)->count();
      // $seventeen_2_count = $seventeen_2_count_plus - $seventeen_2_count_minus;
      // $seventeen_2_points = ($seventeen_2_count * 17) - 51;
      // if($seventeen_2_points > 0) {
      //    $seventeen_2_total_points = ($seventeen_2_count * 17) - 51;
      // } else {
      //    $seventeen_2_total_points = 0;
      // }

      // $sixteen_2_count_plus = Score::where('team_id',2)->where('score',16)->where('game_id',$game->id)->count();
      // $sixteen_2_count_minus = Score::where('team_id',2)->where('score',-16)->where('game_id',$game->id)->count();
      // $sixteen_2_count = $sixteen_2_count_plus - $sixteen_2_count_minus;
      // $sixteen_2_points = ($sixteen_2_count * 16) - 48;
      // if($sixteen_2_points > 0) {
      //    $sixteen_2_total_points = ($sixteen_2_count * 16) - 48;
      // } else {
      //    $sixteen_2_total_points = 0;
      // }

      // $fifteen_2_count_plus = Score::where('team_id',2)->where('score',15)->where('game_id',$game->id)->count();
      // $fifteen_2_count_minus = Score::where('team_id',2)->where('score',-15)->where('game_id',$game->id)->count();
      // $fifteen_2_count = $fifteen_2_count_plus - $fifteen_2_count_minus;
      // $fifteen_2_points = ($fifteen_2_count * 15) - 45;
      // if($fifteen_2_points > 0) {
      //    $fifteen_2_total_points = ($fifteen_2_count * 15) - 45;
      // } else {
      //    $fifteen_2_total_points = 0;
      // }

      // $bull_2_count_plus = Score::where('team_id',2)->where('score',25)->where('game_id',$game->id)->count();
      // $bull_2_count_minus = Score::where('team_id',2)->where('score',-25)->where('game_id',$game->id)->count();
      // $bull_2_count = $bull_2_count_plus - $bull_2_count_minus;
      // $bull_2_points = ($bull_2_count * 25) - 75;
      // if($bull_2_points > 0) {
      //    $bull_2_total_points = ($bull_2_count * 25) - 75;
      // } else {
      //    $bull_2_total_points = 0;
      // }

      // $player_2_total_points =
      //    $twenty_2_total_points +
      //    $nineteen_2_total_points +
      //    $eighteen_2_total_points +
      //    $seventeen_2_total_points +
      //    $sixteen_2_total_points +
      //    $fifteen_2_total_points +
      //    $bull_2_total_points
      // ;


      return view('UI.darts.cricket.players.index', compact(
         'game',
         'players',
         'possibleScores'
         
         // 'twenty_1_count','twenty_1_points',
         // 'nineteen_1_count','nineteen_1_points',
         // 'eighteen_1_count','eighteen_1_points',
         // 'seventeen_1_count','seventeen_1_points',
         // 'sixteen_1_count','sixteen_1_points',
         // 'fifteen_1_count','fifteen_1_points',
         // 'bull_1_count','bull_1_points',

         // 'twenty_2_count','twenty_2_points',
         // 'nineteen_2_count','nineteen_2_points',
         // 'eighteen_2_count','eighteen_2_points',
         // 'seventeen_2_count','seventeen_2_points',
         // 'sixteen_2_count','sixteen_2_points',
         // 'fifteen_2_count','fifteen_2_points',
         // 'bull_2_count','bull_2_points',

         // 'player_1_total_points',
         // 'player_2_total_points'
      ));
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

      $score = new DartsScore;
         $score->user_id = $request->user_id;
         $score->team_id = 0;
         $score->game_id = $request->game_id;
         $score->score = $request->score;
      $score->save();

      // Change the game status to In Progress 
      $game = DartsGame::find($request->game_id);
         $game->status = 'In Progress';
      $game->save();

      if(cricketGameWinner($game) == true) {
         $game = DartsGame::find($request->game_id);
            $game->status = 'Completed';
         $game->save();
      }

      Session::flash('dart-success','The scoresheet has been updated.');
      return redirect()->back();
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
