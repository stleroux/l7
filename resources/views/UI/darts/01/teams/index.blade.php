@extends(''.($teamGameDone == 0) ? 'layouts.UI.app-10-2' : 'layouts.UI.app-10')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
	<style>
		.hover { background-color: grey; }
		.thead tr th { color: yellow; }

		td.rowcolSelected:hover{
			background-color: red;
			color: black;
			font-weight: bold;
		}
	</style>
@endsection

@section('pageHeader')
   {{-- <i class="{{ config('icons.add') }}"></i> --}}
   Game Scoreboard
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('darts.index') }}">Darts</a></li>
   <li class="breadcrumb-item">Game</li>
@endsection

@section('rightSidebar')
@endsection

{{-- @section('rightColumn')
   @include('UI.darts.blocks.sidebar')
@endsection --}}

@section('rightColumn')
   <p>&nbsp;</p>
   @include('UI.darts.blocks.possibleOuts')
   @include('UI.darts.01.teams.help')
@endsection

@section('content')

	@include('UI.darts.01.teams.topbar')

	<form action="{{ route('darts.01.teams.store') }}" method="POST">
		@csrf

	   @isset($teamGameDone)
	      @if(!$teamGameDone)
	         @include('UI.darts.01.inc.scoreboard')
	      @endif
	   @endisset
		
		<div class="form-row">
			<div class="col-sm-4">
				@include('UI.darts.01.teams.t1playersPanel')
				@include('UI.darts.01.teams.t1scoresheet')
			</div>

			<div class="col-sm-4">
	         @isset($teamGameDone)
	            @if(!$teamGameDone)
	               @include('UI.darts.01.teams.scorePad')
				      @include('UI.darts.01.inc.dartboard')
	            @endif
	         @endisset
	         @include('UI.darts.01.teams.gameInfo')
				@include('UI.darts.01.teams.teamStats')
				@include('UI.darts.01.teams.playerStats')
			</div>

			<div class="col-sm-4">
				@include('UI.darts.01.teams.t2playersPanel')
				@include('UI.darts.01.teams.t2scoresheet')
			</div>
		</div>

	</form>

	@include('UI.darts.01.teams.help')

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
