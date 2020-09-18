<div class="card-footer p-1">

   <div class="row">

	   <div class="col">
	   	<i class="far fa-arrow-alt-circle-up"></i> - Click to Add
	   </div>

	   <div class="col">
	   	<i class="far fa-arrow-alt-circle-down"></i> - Click to Substract
	   </div>

	   <div class="col">
	   	<i class="fas fa-minus-circle"></i> - 1 Score
	   </div>

	   <div class="col">
	   	<i class="fas fa-plus-circle"></i> - 2 Score
	   </div>

	   <div class="col">
	   	<i class="fas fa-times-circle"></i> - 3 Score
	   </div>

	   <div class="col">

	   	@if(Route::current()->getName() == 'darts.cricket.players.index')
		   	@if($game->status != 'Completed')
	            <a href="{{ route('darts.cricket.players.completed', $game->id) }}" class="btn btn-sm btn-info float-right">Mark Game As Completed</a>
	         @endif
         @endif

{{-- @php
	dd(Route::current()->getName());
@endphp --}}
			@if(Route::current()->getName() == 'darts.cricket.teams.index')
	         @if($game->status != 'Completed')
	            <a href="{{ route('darts.cricket.teams.completed', $game->id) }}" class="btn btn-sm btn-info float-right">Mark Game As Completed</a>
	         @endif
         @endif

	   </div>

	</div>
	
</div>
