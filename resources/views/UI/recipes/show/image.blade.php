<div class="col-sm-4">
	<div class="card card-trans-6 mb-2">
		
		<div class="card-header card_header p-1">
			<div class="card-title">
				Image				
			</div>
		</div>
		
		<div class="card-body text text-center p-1">
			@if($recipe->image)
				<img src="/_recipes/{{ $recipe->image }}" alt="" height="200px" width="auto" class="card-img">
			@else
				<img src="/_recipes/image_not_available.jpg" alt="" height="200px" width="auto" class="card-img">
			@endif
		</div>

	</div>
</div>
