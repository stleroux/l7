{{-- @if(checkACL('user')) --}}
	<div class="col-md-12">
		<div class="card card-secondary mb-2">
			<div class="card-header p-1">Methodology</div>
			<div class="card-body p-1 text-black">
				{!! $recipe->methodology !!}
			</div>
		</div>
	</div>
{{-- @endif --}}