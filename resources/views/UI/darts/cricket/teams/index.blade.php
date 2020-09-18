@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   {{-- <i class="{{ Config::get('icons.add') }}"></i> --}}
   CRICKET - Team Game
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('darts.index') }}">Darts</a></li>
   <li class="breadcrumb-item">Cricket</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
   {{-- @include('UI.darts.blocks.sidebar') --}}
@endsection

@section('content')

   @include('UI.darts.cricket.teams.topbar')

   <div class="card mb-2 card-trans-2">
      
{{--       <div class="card-header p-2">
         CRICKET - TEAM GAME
         <span class="float-right">Game ID : {{ $game->id }}</span>
      </div> --}}
      
      <div class="card-body p-2 card-trans-2">
         
         <div class="form-row">

            <div class="col">
               <div class="card mb-2 card-trans-2">
                  <div class="card-header p-2 text-light">Team 1 Players</div>
                  <div class="card-body p-2">
                     <ul class="list-group">
                        @foreach($team_1_players as $p)
                           <li class="list-group-item text text-center card-trans-2">{{ $p->first_name }}</li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>
            
            <div class="col-7 mx-auto">
               <table class="table table-sm table-bordered">
                  <thead align="center">
                     <tr class="h3">
                        <th></th>
                        <th>Team 1</th>
                        <th></th>
                        <th>Score</th>
                        <th></th>
                        <th>Team 2</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody align="center" class="bg-secondary">
                     @include('UI.darts.cricket.teams.inc.20')
                     @include('UI.darts.cricket.teams.inc.19')
                     @include('UI.darts.cricket.teams.inc.18')
                     @include('UI.darts.cricket.teams.inc.17')
                     @include('UI.darts.cricket.teams.inc.16')
                     @include('UI.darts.cricket.teams.inc.15')
                     @include('UI.darts.cricket.teams.inc.bull')
                     @include('UI.darts.cricket.teams.inc.totals')
                  </tbody>
               </table>
            </div>
            
            <div class="col">
               <div class="card mb-2 card-trans-2">
                  <div class="card-header p-2 text-light">Team 2 Players</div>
                  <div class="card-body p-2">
                     <ul class="list-group">
                        @foreach($team_2_players as $p)
                           <li class="list-group-item text text-center card-trans-2">{{ $p->first_name }}</li>
                        @endforeach
                     </ul>
                  </div>
               </div>
            </div>

         </div>
         
      </div>
      
      @include('UI.darts.cricket.inc.footer')
      @include('UI.darts.cricket.teams.help')

   </div>

@endsection
