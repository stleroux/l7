{{-- @if(checkACL('user')) --}}
	<div class="col-md-12">
		<div class="card card-trans-6 mb-2">
			<div class="card-header card_header p-2">Methodology</div>
			<div class="card-body card_body p-1 text-black">
				{!! $recipe->methodology !!}
			</div>
		</div>
	</div>
{{-- @endif --}}