{{-- @if(checkACL('user')) --}}
	<div class="col-md-3">
		<div class="card card-trans-6 mb-2">
			<div class="card-header card_header p-2">Personal</div>
			<div class="card-body p-1 text-center text-dark">
				@if ($recipe->personal)
					<i class="fa fa-check" aria-hidden="true"></i> YES
				@else
					<i class="fa fa-ban" aria-hidden="true"></i> NO
				@endif
			</div>
		</div>
	</div>
{{-- @endif --}}