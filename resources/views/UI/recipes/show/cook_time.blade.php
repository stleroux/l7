{{-- @if(checkACL('user')) --}}
	<div class="col-md-3">
		<div class="card card-trans-6 mb-2">
			
			<div class="card-header card_header p-2">
				Cook Time
			</div>
			
			<div class="card-body p-1 text-center text-dark">
				@if(($recipe->cook_time_hours > 0) && ($recipe->cook_time_minutes > 0))
               {{ $recipe->cook_time_hours > 1 ? $recipe->cook_time_hours . ' hours' : $recipe->cook_time_hours .' hour' }}
               {{ $recipe->cook_time_minutes > 1 ? $recipe->cook_time_minutes . ' minutes' : $recipe->cook_time_minutes .' minute' }}
            @elseif(($recipe->cook_time_hours > 0) && (!$recipe->cook_time_minutes))
               {{ $recipe->cook_time_hours > 1 ? $recipe->cook_time_hours . ' hours' : $recipe->cook_time_hours .' hour' }}
            @elseif((!$recipe->cook_time_hours) && ($recipe->cook_time_minutes > 0))
               {{ $recipe->cook_time_minutes > 1 ? $recipe->cook_time_minutes . ' minutes' : $recipe->cook_time_minutes .' minute' }}
            @else
               N/A
            @endif
			</div>

		</div>
	</div>
{{-- @endif --}}