{{-- @if(checkACL('user')) --}}
	<div class="col-md-3">
		<div class="card card-secondary mb-2">
			<div class="card-header p-1">Servings</div>
			<div class="card-body p-1 text-center text-dark">
            @if ($recipe->servings)
					{{ $recipe->servings }}
				@else
					N/A
				@endif
         </div>
		</div>
	</div>
{{-- @endif --}}