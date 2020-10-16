<?php

namespace App\Http\Controllers\UI\Darts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Gate;
use Session;
use App\Models\User;
use App\Models\DartsGame;
use App\Models\DartsScore;


class GamesController extends Controller
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
   // public function index()
   // {
   //    // Check if user has required permission
   //    abort_unless(Gate::allows('dart-access1'), 403);

   //    return view('UI.darts.index');
   // }


##################################################################################################################
#  ██████╗██████╗ ███████╗ █████╗ ████████╗███████╗
# ██╔════╝██╔══██╗██╔════╝██╔══██╗╚══██╔══╝██╔════╝
# ██║     ██████╔╝█████╗  ███████║   ██║   █████╗  
# ██║     ██╔══██╗██╔══╝  ██╔══██║   ██║   ██╔══╝  
# ╚██████╗██║  ██║███████╗██║  ██║   ██║   ███████╗
#  ╚═════╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝
// Show the form for creating a new resource
##################################################################################################################
   public function create()
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-access'), 403);

      return view('UI.darts.games.create');
   }


##################################################################################################################
# ███████╗████████╗ ██████╗ ██████╗ ███████╗
# ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
# ███████╗   ██║   ██║   ██║██████╔╝█████╗  
# ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
# ███████║   ██║   ╚██████╔╝██║  ██║███████╗
# ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
// Store a newly created resource in storage
##################################################################################################################
   public function store(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-access'), 403);

      // validate the data
      $this->validate($request, [
         'type' => 'required',
      ]);

      $game = new DartsGame;
         $game->type = $request->type;
         $game->status = 'New';
      $game->save();

      return redirect()->route('darts.games.selectTeamsOrPlayers', $game->id);
   }


##################################################################################################################
# ███████╗███████╗██╗     ███████╗ ██████╗████████╗
# ██╔════╝██╔════╝██║     ██╔════╝██╔════╝╚══██╔══╝
# ███████╗█████╗  ██║     █████╗  ██║        ██║   
# ╚════██║██╔══╝  ██║     ██╔══╝  ██║        ██║   
# ███████║███████╗███████╗███████╗╚██████╗   ██║   
# ╚══════╝╚══════╝╚══════╝╚══════╝ ╚═════╝   ╚═╝   
// Store a newly created resource in storage
##################################################################################################################
   public function selectTeamsOrPlayers($game_id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-access'), 403);

      $game = DartsGame::find($game_id);
      $gameTypes = ['castle','baseball','around']; // Do not allow teams selection for these game types
      return view('UI.darts.games.selectTeamsOrPlayers', compact('game','gameTypes'));
   }


##################################################################################################################
# ███████╗████████╗ ██████╗ ██████╗ ███████╗
# ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
# ███████╗   ██║   ██║   ██║██████╔╝█████╗  
# ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
# ███████║   ██║   ╚██████╔╝██║  ██║███████╗
# ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
// Store a newly created resource in storage
##################################################################################################################
   public function storeTeamsOrPlayers(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-access'), 403);

      $game = DartsGame::find($request->game_id);
         if($request->t_players) {
            $game->t1_players = $request->t_players;
            $game->t2_players = $request->t_players;
            $game->ind_players = null; 
         }
         if($request->ind_players){
            $game->t1_players = null;
            $game->t2_players = null;
            $game->ind_players = $request->ind_players; 
         }
      $game->save();

      // Session::flash('success','The game has been created 1111111.');
      if($request->t_players) {
         return redirect()->route('darts.games.selectTeamPlayers', $game->id);
      } else {
         return redirect()->route('darts.games.selectPlayers', $game->id);
      }
   }


##################################################################################################################
# ███████╗███████╗██╗     ███████╗ ██████╗████████╗
# ██╔════╝██╔════╝██║     ██╔════╝██╔════╝╚══██╔══╝
# ███████╗█████╗  ██║     █████╗  ██║        ██║   
# ╚════██║██╔══╝  ██║     ██╔══╝  ██║        ██║   
# ███████║███████╗███████╗███████╗╚██████╗   ██║   
# ╚══════╝╚══════╝╚══════╝╚══════╝ ╚═════╝   ╚═╝   
// Select players when team play is selected
##################################################################################################################
   public function selectTeamPlayers(Request $request, $game_id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-access'), 403);

      $game = DartsGame::find($game_id);
      $players = User::where('id', '!=', 1)
                     ->whereNotNull('first_name')
                     ->whereNotNull('last_name')
                     ->where('dart_doubleOut', "!=", 0)
                     ->orderby('last_name', 'asc')
                     ->get();
      // dd($players);
      return view('UI.darts.games.selectTeamPlayers', compact('players','game'));
   }


##################################################################################################################
# ███████╗████████╗ ██████╗ ██████╗ ███████╗
# ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
# ███████╗   ██║   ██║   ██║██████╔╝█████╗  
# ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
# ███████║   ██║   ╚██████╔╝██║  ██║███████╗
# ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
// Save players when team play is selected
##################################################################################################################
   public function storeTeamPlayers(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-access'), 403);

      $game = DartsGame::find($request->game_id);

      if (isset($request->team1players))
      {
         $shotOrder = 1;
         foreach($request->team1players as $player)
         {
            DB::insert('insert into dart__players (game_id, team_id, user_id, shooting_order) values (?, ?, ?, ?)', [$game->id, 1, $player, $shotOrder]);
            $shotOrder = $shotOrder + 2;
         }
      }

      if (isset($request->team2players))
      {
         $shotOrder = 2;
         foreach($request->team2players as $player)
         {
            DB::insert('insert into dart__players (game_id, team_id, user_id, shooting_order) values (?, ?, ?, ?)', [$game->id, 2, $player, $shotOrder]);
            $shotOrder = $shotOrder + 2;
         }
      }

      Session::flash('success','The game has been created.');
      return redirect()->route('darts.games.board');
   }


##################################################################################################################
# ███████╗███████╗██╗     ███████╗ ██████╗████████╗
# ██╔════╝██╔════╝██║     ██╔════╝██╔════╝╚══██╔══╝
# ███████╗█████╗  ██║     █████╗  ██║        ██║   
# ╚════██║██╔══╝  ██║     ██╔══╝  ██║        ██║   
# ███████║███████╗███████╗███████╗╚██████╗   ██║   
# ╚══════╝╚══════╝╚══════╝╚══════╝ ╚═════╝   ╚═╝   
// Select individual players when no team play is selected
##################################################################################################################
   public function selectPlayers($game_id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-access'), 403);

      $game = DartsGame::find($game_id);
      $players = User::where('id', '!=', 1)
                     ->whereNotNull('first_name')
                     ->whereNotNull('last_name')
                     ->where('dart_doubleOut', "!=", 0)
                     ->orderby('last_name', 'asc')
                     ->get();
      return view('UI.darts.games.selectPlayers', compact('players','game'));
   }


##################################################################################################################
# ███████╗████████╗ ██████╗ ██████╗ ███████╗
# ██╔════╝╚══██╔══╝██╔═══██╗██╔══██╗██╔════╝
# ███████╗   ██║   ██║   ██║██████╔╝█████╗  
# ╚════██║   ██║   ██║   ██║██╔══██╗██╔══╝  
# ███████║   ██║   ╚██████╔╝██║  ██║███████╗
# ╚══════╝   ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚══════╝
// Save individual players when no team play is selected
##################################################################################################################
   public function storePlayers(Request $request)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-access'), 403);

      $game = DartsGame::find($request->game_id);
      $shotOrder = 1;
      foreach($request->players as $player)
      {
         DB::insert('insert into dart__players (game_id, user_id, shooting_order) values (?, ?, ?)', [$request->game_id, $player, $shotOrder]);
         $shotOrder = $shotOrder + 1;
      }
      
      Session::flash('success','The game has been created.');
      return redirect()->route('darts.games.board');
   }


##################################################################################################################
# ██████╗ ███████╗███████╗████████╗██████╗  ██████╗ ██╗   ██╗
# ██╔══██╗██╔════╝██╔════╝╚══██╔══╝██╔══██╗██╔═══██╗╚██╗ ██╔╝
# ██║  ██║█████╗  ███████╗   ██║   ██████╔╝██║   ██║ ╚████╔╝ 
# ██║  ██║██╔══╝  ╚════██║   ██║   ██╔══██╗██║   ██║  ╚██╔╝  
# ██████╔╝███████╗███████║   ██║   ██║  ██║╚██████╔╝   ██║   
# ╚═════╝ ╚══════╝╚══════╝   ╚═╝   ╚═╝  ╚═╝ ╚═════╝    ╚═╝   
// Remove the specified resource from storage
// Used in the index page and trashAll action to soft delete multiple records
##################################################################################################################
   public function destroy($id)
   {
      // Check if user has required permission
      abort_unless(Gate::allows('dart-delete'), 403);

      // Delete related entries
      $users = DB::table('dart__players')->where('game_id', $id)->delete();
      $scores = DB::table('dart__scores')->where('game_id', $id)->delete();

      $game = DartsGame::find($id);
      $game->delete();

      Session::flash('success', 'The game and related entries were successfully deleted!');
      return redirect()->route('darts.games.board');
   }
   
}
