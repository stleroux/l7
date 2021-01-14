{{-- @if(checkACL('user')) --}}
	<div class="col-md-3">
		<div class="card card-secondary mb-2">
			<div class="card-header p-1">Prep Time</div>
			<div class="card-body p-1 text-center text-dark">
				@if($recipe->prep_time_hours > 0)
					@if($recipe->prep_time_hours == 1)
						{{ $recipe->prep_time_hours }} Hour
					@else
						{{ $recipe->prep_time_hours }} Hours
					@endif
				@else
					@if($recipe->prep_time_minutes > 0)
						@if($recipe->prep_time_minutes == 1)
							{{ $recipe->prep_time_minutes }} Minute
						@else
							{{ $recipe->prep_time_minutes }} Minutes
						@endif
					@else
						N/A
					@endif
				@endif
	   	</div>
		</div>
	</div>
{{-- @endif --}}