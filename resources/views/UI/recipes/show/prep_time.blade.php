{{-- @if(checkACL('user')) --}}
	<div class="col-md-3">
		<div class="card card-trans-6 mb-2">
			<div class="card-header card_header p-2">Prep Time <small>(Minutes)</small></div>
			<div class="card-body p-1 text-center text-dark">
            {{ $recipe->prep_time }}
         </div>
		</div>
	</div>
{{-- @endif --}}