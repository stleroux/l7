{{-- @if(checkACL('user')) --}}
	<div class="col-md-3">
		<div class="card card-secondary mb-2">
			<div class="card-header p-1">Personal</div>
			<div class="card-body p-1 text-center text-dark">
				@if ($recipe->personal == 1)
					<i class="fa fa-check"></i> YES
				@else
					<i class="fa fa-ban"></i> NO
				@endif
			</div>
		</div>
	</div>
{{-- @endif --}}