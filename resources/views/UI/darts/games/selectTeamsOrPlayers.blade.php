@extends ('layouts.UI.app-10')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   {{-- <i class="{{ Config::get('icons.add') }}"></i> --}}
   Create Game - Step : 2
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('darts.index') }}">Darts</a></li>
   <li class="breadcrumb-item">Create Game</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
   @include('UI.darts.blocks.sidebar')
@endsection

@section('content')

{{-- {!! Form::open(array('route'=>'darts.games.storeTeamsOrPlayers'), ['class'=>'form-inline']) !!} --}}
<form action="{{ route('darts.games.storeTeamsOrPlayers') }}" method="POST">
   {{-- {{ Form::hidden('game_id', $game->id) }} --}}
   @csrf
   <input type="hidden" name="game_id" value="{{ $game->id}}">

   <div class="card mb-2 card-trans-2">
      {{-- <div class="card-header section_header p-2">Create New Game - Step 2</div> --}}
      <div class="card-body section_body p-2">

         @if(!in_array($game->type, $gameTypes))

            @if(!in_array($game->type, $gameTypes))
               <div class="row col">
            @endif

            {{-- PLAYERS PER TEAM --}}
            <div @if(!in_array($game->type, $gameTypes)) class="col-5" @endif>
               <div class="card mb-2 card-trans-4">
                  <div class="card-header card_header p-2">N<sup>o</sup> Of Player(s) Per Team</div>
                  <div class="card-body card_body pb-2">
                     <div class="form-group {{ $errors->has('t_players') ? 'has-error' : '' }}">
                        <select name="t_players" class="form-control form-control-sm">
                           <option value="">Select...</option>
                           <option value="2">2 players per team = 4 players total</option>
                           <option value="3">3 players per team = 6 players total</option>
                           <option value="4">4 players per team = 8 players total</option>
                           <option value="5">5 players per team = 10 players total</option>
                        </select>
                        {{-- {{ Form::select('t_players', [
                           '2'=>'2 players per team = 4 players total',
                           '3'=>'3 players per team = 6 players total',
                           '4'=>'4 players per team = 8 players total',
                           '5'=>'5 players per team = 10 players total'], null, ['placeholder'=>'Select...', 'class'=>'form-control form-control-sm']) }} --}}
                        <span class="text-danger">{{ $errors->first('t_players') }}</span>
                     </div>
                  </div>
               </div>
            </div>
         
            {{-- OR --}}
            <div @if(!in_array($game->type, $gameTypes)) class="col-2" @endif>
               <div class="card mt-4 mb-2 card-trans-4">
                  <div class="card-body card_body p-2">
                     <div class="text text-center"><h1>OR</h1></div>
                  </div>
               </div>
            </div>

         @endif

            
         <div @if(!in_array($game->type, $gameTypes)) class="col-5" @endif>

            {{-- PLAYERS --}}
            <div class="card mb-2 card-trans-4">
               <div class="card-header card_header p-2">N<sup>o</sup> Of Individual Player(s)</div>
               <div class="card-body card_body pb-2">
                  <div @if(in_array($game->type, $gameTypes)) class="col-3" @endif>
                     <div class="form-group {{ $errors->has('ind_players') ? 'has-error' : '' }}">
                        <select name="ind_players" class="form-control form-control-sm">
                           <option value="">Select...</option>
                           <option value="1">1 player (Practice Mode)</option>
                           <option value="2">2 players</option>
                           <option value="3">3 players</option>
                           <option value="4">4 players</option>
                           <option value="5">5 players</option>
                           <option value="6">6 players</option>
                           <option value="7">7 players</option>
                           <option value="8">8 players</option>
                           <option value="9">9 players</option>
                           <option value="10">10 players</option>
                        </select>
                        {{-- {{ Form::select('ind_players', [
                           '1'=>'1 player (Practice Mode)',
                           '2'=>'2 players',
                           '3'=>'3 players',
                           '4'=>'4 players',
                           '5'=>'5 players',
                           '6'=>'6 players',
                           '7'=>'7 players',
                           '8'=>'8 players',
                           '9'=>'9 players',
                           '10'=>'10 players'],
                           null,
                           ['placeholder'=>'Select...', 'class'=>'form-control form-control-sm']) }} --}}
                        <span class="text-danger">{{ $errors->first('ind_players') }}</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         @if(!in_array($game->type, $gameTypes))
            </div>
         @endif

      </div>

      <div class="card-footer p-1">
         <span class="float-right">
            {{-- {{ Form::submit ('Next Step', array('class'=>'btn btn-sm btn-primary')) }} --}}
            <button type="submit" class="btn btn-sm btn-primary">Next Step</button>
         </span>
      </div>

   </div>

</form>

@endsection
