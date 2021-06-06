
{{-- {!! Form::open(['route' => 'darts.01.players.store']) !!} --}}
<form action="{{ route('darts.01.players.store') }}" method="POST">
   @csrf
   {{-- {{ Form::hidden('game_id', $game->id, ['size'=>3]) }} --}}
   <input type="hidden" name="game_id" value="{{ $game->id }}">
   {{-- {{ Form::hidden('game_type', $game->type, ['size'=>3]) }} --}}
   <input type="hidden" name="game_type" value="{{ $game->type }}">
   <input type="hidden" name="remainingScore" value="{{ $remainingScore }}" />

   <div class="card mb-2 card-trans-4">
   
      <div class="card-header p-2 text-light">
         @if(!$gameDone)
            Enter Selected Player's Score
         @else
            Players
         @endif
      </div>

      <div class="card-body p-2 card-trans-2">

         @foreach($players as $player)

            @if(!$gameDone)
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

         @if(!$gameDone)
            <div class="container pt-2">
               <div class="row justify-content-center">
                  <div class="input-group col-sm-6">
                     <input class="form-control form-control-lg" type="text" id="score" name="score" autocomplete="off" style="text-align: center" />
                     <div class="input-group-append">
                        <button class="btn btn-success btn-lg" type="submit">Go!</button>
                     </div>
                  </div>
               </div>
            </div>
         @endif

      </div>

      @if(!$gameDone)
         <div class="card-footer p-1">
            {{-- @if ($message = Session::get('dart-success'))

               <div id="ERROR1" class="text-danger" id="display-dart-success">
                  {{ Session('success') }}
               </div>
               <div class="p-0" id="display-dart-empty">
                  Click Go! or Press Enter to submit
               </div>

            @elseif ($message = Session::get('dart-error'))

               <div id="ERROR2" class="text-danger" id="display-dart-error">
                  {{ Session('error') }}
               </div>
               <div class="p-0" id="success-empty">
                  Click Go! or Press Enter to submit
               </div>

            @elseif(count($errors) > 0)

               @foreach ($errors->all() as $error)
                  <div id="ERROR3" class="text-danger" id="display-dart-error">
                     {{ $error }}
                  </div>
                  <div class="p-0" id="success-empty">
                     Click Go! or Press Enter to submit
                  </div>
               @endforeach

            @else

            @endif --}}
               <div class="p-0">
                  Click Go! or Press Enter to submit
               </div>

         </div>
      @endif

   </div>

</form>

@section('scripts')
{{--    <script type="text/javascript">
      $('#display-dart-empty').hide();
      setTimeout(function() {
         $('#display-dart-success').remove();
         $('#display-dart-error').remove();
         $('#display-dart-empty').show();
      }, 5000); // <-- time in milliseconds
   </script> --}}

   <script type="text/javascript">
      $(document).ready(function(){
         $("#score").focus();
      });
   </script>


   @include('UI.darts.01.inc.messages.error.impossibility')
   @include('UI.darts.01.inc.messages.error.invalid')
   @include('UI.darts.01.inc.messages.error.noScore')
   @include('UI.darts.01.inc.messages.error.problem')
   @include('UI.darts.01.inc.messages.error.tooHigh')

   @include('UI.darts.01.inc.messages.success.0-20')
   @include('UI.darts.01.inc.messages.success.21-40')
   @include('UI.darts.01.inc.messages.success.41-60')
   @include('UI.darts.01.inc.messages.success.61-120')
   @include('UI.darts.01.inc.messages.success.121-179')
   @include('UI.darts.01.inc.messages.success.180')

@endsection
