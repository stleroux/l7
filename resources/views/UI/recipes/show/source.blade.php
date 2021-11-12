<div class="col-md-3">

	<div class="card card-trans-6 mb-2">

		<div class="card-header card_header p-1">
			<div class="card-title">
				Source				
			</div>
		</div>

		<div class="card-body p-1 text-center text-dark">
			@if ($recipe->source)
				{{ $recipe->source }}
			@else
				N/A
			@endif
		</div>

	</div>

</div>
