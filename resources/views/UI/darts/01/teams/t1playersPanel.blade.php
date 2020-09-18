<div class="card mb-2 card-trans-4">

	<div class="card-header p-2 text-light">Team 1 Players</div>

	<div class="card-body p-2 card-trans-2">

      @foreach(zeroOneTeamPlayers($game, 1) as $player)
         
         @if(!$teamGameDone)
            @if($player->shooting_order == $nextShot)
               <label class="bg-primary border btn-block p-2 m-0">
                  {{-- {{ Form::radio('user_id', $player->user_id , true) }} --}}
                  <input type="radio" name="user_id" value="{{ $player->user_id }}" checked />
                  {{ $player->first_name }} {{ $player->last_name }}
               </label>
            @else
               <label class="bg-default btn-block p-2 m-0">
                  {{-- {{ Form::radio('user_id', $player->user_id , false, ['disabled']) }} --}}
                  <input type="radio" name="user_id" value="{{ $player->user_id }}" disabled />
                  {{ $player->first_name }} {{ $player->last_name }}
               </label>
            @endif
         @else
            <label class="bg-default btn-block p-2 m-0">
               {{-- {{ Form::radio('user_id', $player->user_id , false, ['disabled']) }} --}}
               <input type="radio" name="user_id" value="{{ $player->user_id }}" disabled />
               {{ $player->first_name }} {{ $player->last_name }}
            </label>
         @endif

		@endforeach

   </div>

</div>
