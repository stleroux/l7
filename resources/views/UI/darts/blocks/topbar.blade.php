<div class="pb-1 pl-0 text text-right">

      @if(Route::currentRouteName() != 'darts.index')
         <a href="{{ route('darts.index') }}" class="btn btn-primary p-1 {{ Route::is('darts') ? 'active' : '' }}">
            <i class="fa fa-bullseye"></i>
            Leader Board
         </a>
      @endif

      @if(Route::currentRouteName() != 'darts.games.board')
         <a href="{{ route('darts.games.board') }}"
            class="btn btn-primary p-1 {{ Route::is('darts.games.board') ? 'active' : '' }}">
            <i class="fa fa-industry"></i>
            Games Board
         </a>
      @endif


      {{-- @if(checkPerm('dart_add')) --}}
         {{-- @if(
            Route::currentRouteName() == 'darts.around.players' ||
            Route::currentRouteName() == 'darts.baseball.players' ||
            Route::currentRouteName() == 'darts.cricket.players' ||
            Route::currentRouteName() == 'darts.zeroOne.players'
         ) --}}
         @if(Route::currentRouteName() == 'darts.games.board' || Route::currentRouteName() == 'darts.index')
            {{-- <div class="float-right"> --}}
            <a href="{{ route('darts.game.create') }}"
               class="btn btn-primary p-1
               {{ Route::is('darts.games.create') ? 'active' : '' }}
               {{ Route::is('darts.games.selectTeamsOrPlayers') ? 'active' : '' }}
               {{ Route::is('darts.games.selectPlayers') ? 'active' : '' }}
            ">
               <i class="fa fa-gamepad"></i>
               New Game
            </a>
            {{-- </div> --}}
         @endif
         
         @if(
            Route::currentRouteName() == 'darts.around.players' ||
            Route::currentRouteName() == 'darts.baseball.players' ||
            Route::currentRouteName() == 'darts.cricket.players' ||
            Route::currentRouteName() == 'darts.zeroOne.players'
         )
            <a href="{{ URL::previous() }}">Back</a>
      @endif


      @if(!Route::currentRouteName() == 'darts.index')
         <span class="float-right pr-2 pt-1">Game ID : {{ $game->id }}</span>
      @endif
</div>

