@extends ('layouts.UI.app-10-2')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
   <style>
      .hover { background-color: grey; }
      .thead tr th { color: yellow; }

      /*tr.rowcolSelected{ background-color: #222222; }*/
      td.rowcolSelected:hover{
         background-color: red;
         color: black;
         font-weight: bold;
      }
   </style>
@endsection

@section('pageHeader')
   {{-- <i class="{{ Config::get('icons.add') }}"></i> --}}
   Game Scoreboard
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('darts.index') }}">Darts</a></li>
   <li class="breadcrumb-item">01</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
   <p>&nbsp;</p>
   @include('UI.darts.blocks.possibleOuts')
   @include('UI.darts.01.players.help')
@endsection

@section('content')

   @include('UI.darts.01.players.topbar')

   @if(!$gameDone)
      @include('UI.darts.01.inc.scoreboard')
   @endif
   
   
   <div class="form-row">
      <div class="col-sm-4">
         @include('UI.darts.01.players.scorePanel')
      </div>

      @isset($gameDone)
         @if(!$gameDone)
            <div class="col-sm-4">
               @include('UI.darts.01.inc.dartboard')
            </div>

            <div class="col-sm-4">
               @include('UI.darts.01.players.playerStats')
               @include('UI.darts.01.players.gameInfo')
            </div>
         @else
            <div class="col-sm-4">
               @include('UI.darts.01.players.gameInfo')
            </div>
            <div class="col-sm-4">
               @include('UI.darts.01.players.playerStats')
            </div>
         @endif
      @endisset
   </div>

   <div class="form-row">
      <div class="col-sm-12">
         <div class="card-group">
            <div class="card mb-2 card-trans-4">
               <div class="card-header p-2 text-light">Scoresheets</div>
               <div class="card-body p-2">
                  <div class="form-row">
                     @foreach($players as $player)
                        @include('UI.darts.01.players.scoresheet', [$player])
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection

@section('scripts')
   <script>
      $("#tbl").delegate('td','mouseover mouseleave', function(e) {
         if (e.type == 'mouseover') {
            $(this).parent().addClass("hover");
            $("colgroup").eq($(this).index()).addClass("hover");
         } else {
            $(this).parent().removeClass("hover");
            $("colgroup").eq($(this).index()).removeClass("hover");
         }
      });
   </script>
@endsection

