{{-- @if(checkACL('user')) --}}
	<div class="col-md-3">
		<div class="card card-trans-6 mb-2">
			
			<div class="card-header card_header p-2">
				Cook Time <small>(Minutes)</small>
			</div>
			
			<div class="card-body p-1 text-center text-dark">
				{{ $recipe->cook_time }}
			</div>

		</div>
	</div>
{{-- @endif --}}