@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.darts') }}"></i>            
   Leaderboard
@endsection

@section('breadcrumb')
   {{-- <li class="breadcrumb-item"><a href="{{ route('darts.index') }}">Darts</a></li> --}}
   <li class="breadcrumb-item">Darts</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
   @include('UI.darts.blocks.sidebar')
@endsection

@section('content')

   @include('UI.darts.blocks.topbar')

   <div class="row">
      <div class="col">
         
         <div class="card mb-2 card-trans-2">

            <div class="card-header p-2 text-light">
               <div class="row">
                  <div class="col font-weight-bold card-title">
                     <i class="{{ config('icons.darts') }}"></i>            
                     Dart Keeper
                  </div>
                  <div class="col text-right">
                     Statistics module not completed
                  </div>
               </div>         
            </div>

            <div class="card-body p-2">
               <div class="form-row">
                  <div class="col">
                     @include('UI.darts.statistics.zeroOneTeams')
                  </div>
                  <div class="col">
                     @include('UI.darts.statistics.zeroOneIndividuals')
                  </div>
               </div>

               <div class="form-row">
                  <div class="col">
                     @include('UI.darts.statistics.cricketTeams')
                  </div>
                  <div class="col">
                     @include('UI.darts.statistics.cricketIndividuals')
                  </div>
               </div>

               <div class="form-row">
                  <div class="col">
                     @include('UI.darts.statistics.aroundTheWorldTeams')
                  </div>
                  <div class="col">
                     @include('UI.darts.statistics.aroundTheWorldIndividuals')
                  </div>
               </div>

               <div class="form-row">
                  <div class="col">
                     @include('UI.darts.statistics.baseballTeams')
                  </div>
                  <div class="col">
                     @include('UI.darts.statistics.baseballIndividuals')
                  </div>
               </div>

               <div class="form-row">
                  <div class="col">
                     @include('UI.darts.statistics.castleTeams')
                  </div>
                  <div class="col">
                     @include('UI.darts.statistics.castleIndividuals')
                  </div>
               </div>

            </div>

            <div class="card-footer card_footer p-1 text-light">
               <div class="row">
                  <div class="col-6">
                     Statistics do not include games listed as Practice in the Games Board
                  </div>
                  <div class="col-6">
                     Statistics only account for Completed games
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>

@endsection
