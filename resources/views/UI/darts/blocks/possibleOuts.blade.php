@isset($gameDone)
   @if(!$gameDone)
      @include('UI.darts.01.inc.possibleOuts', ['score'=>$remainingScore, 'user'=>$user])
   @endif
@endisset

@isset($teamGameDone)
   @if(!$teamGameDone)
      @include('UI.darts.01.inc.possibleOuts', ['score'=>$remainingScore, 'user'=>$user])
   @endif
@endisset
