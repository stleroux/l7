{{-- @if(checkACL('user')) --}}
	<div class="col-md-3">

		<div class="card card-trans-6 mb-2">

			<div class="card-header card_header p-1">
            <div class="card-title">
               Prep Time               
            </div>
         </div>

			<div class="card-body p-1 text-center text-dark">
            @if(($recipe->prep_time_hours > 0) && ($recipe->prep_time_minutes > 0))
               {{ $recipe->prep_time_hours > 1 ? $recipe->prep_time_hours . ' hours' : $recipe->prep_time_hours .' hour' }}
               {{ $recipe->prep_time_minutes > 1 ? $recipe->prep_time_minutes . ' minutes' : $recipe->prep_time_minutes .' minute' }}
            @elseif(($recipe->prep_time_hours > 0) && (!$recipe->prep_time_minutes))
               {{ $recipe->prep_time_hours > 1 ? $recipe->prep_time_hours . ' hours' : $recipe->prep_time_hours .' hour' }}
            @elseif((!$recipe->prep_time_hours) && ($recipe->prep_time_minutes > 0))
               {{ $recipe->prep_time_minutes >= 1 ? $recipe->prep_time_minutes . ' minutes' : $recipe->prep_time_minutes .' minute' }}
            @else
               N/A
            @endif
         </div>
		</div>
	</div>
{{-- @endif --}}
