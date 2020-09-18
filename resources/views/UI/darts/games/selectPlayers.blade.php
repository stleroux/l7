@extends ('layouts.UI.app-10')

@section ('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   {{-- <i class="{{ Config::get('icons.add') }}"></i> --}}
   Create Game - Step : 3
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('darts.index') }}">Darts</a></li>
   <li class="breadcrumb-item">Create Game</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
   @include('UI.darts.blocks.sidebar')
@endsection

@section('content')

   {{-- {!! Form::open(array('route'=>'darts.games.storePlayers')) !!} --}}
   <form action="{{ route('darts.games.storePlayers') }}" method="POST">
      @csrf
      {{-- {{ Form::hidden('game_id', $game->id) }} --}}
      <input type="hidden" name="game_id" value="{{ $game->id }}">
      {{-- {{ Form::hidden('players', $game->ind_players) }} --}}
      <input type="hidden" name="players" value="{{ $game->ind_players }}">

      <div class="card mb-2 card-trans-4">
         
         {{-- <div class="card-header section_header p-2">Select The Player(s) For This Game</div> --}}
         
         <div class="card-body section_body p-2">
            <div class="row">
               <div class="col-md-6">
                  <div class="card mb-2 card-trans-4">
                     <div class="card-header card_header p-2">Select The Player(s) For This Game</div>
                     <div class="card-body card_body p-2">
                        @for ($i = 0; $i < $game->ind_players; $i++)
                           <div class="col-sm-3">
                              <label class="form-label mb-0 pb-0">Player {{ $i + 1 }}:</label>
                           </div>
                           <div class="col-sm-6 mb-3">
                              <select name="players[]" class="form-control form-control-sm">
                                 <option value="">Select A Player</option>
                                 @foreach($players as $user)
                                    <option name="player_{{ $i }}" value="{{ $user->id }}">{{ $user->last_name }}, {{ $user->first_name }}</option>
                                 @endforeach
                              </select>
                           </div>
                        @endfor
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="card-footer p-1">
            Fields marked with an<span class="required"></span> are required.
            <span class="float-right">
               {{-- {{ Form::submit ('Create Game', array('class'=>'btn btn-sm btn-primary')) }} --}}
               <button type="submit" class="btn btn-sm btn-primary">Create Game</button>
            </span>
         </div>

      </div>

   </form>
   
@endsection