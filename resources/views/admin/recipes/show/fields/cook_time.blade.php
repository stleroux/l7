{{-- @if(checkACL('user')) --}}
	<div class="col-md-3">
		<div class="card card-secondary mb-2">
			
			<div class="card-header p-1">
				Cook Time
			</div>
			
			<div class="card-body p-1 text-center text-dark">
				@if($recipe->cook_time_hours > 0)
					@if($recipe->cook_time_hours == 1)
						{{ $recipe->cook_time_hours }} Hour
					@else
						{{ $recipe->cook_time_hours }} Hours
					@endif
				@else
					@if($recipe->cook_time_minutes > 0)
						@if($recipe->cook_time_minutes == 1)
							{{ $recipe->cook_time_minutes }} Minute
						@else
							{{ $recipe->cook_time_minutes }} Minutes
						@endif
					@else
						N/A
					@endif
				@endif
			</div>

		</div>
	</div>
{{-- @endif --}}