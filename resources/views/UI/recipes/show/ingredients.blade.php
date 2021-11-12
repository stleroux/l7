<div class="col-sm-8">

	<div class="card card-trans-6 mb-2">
	
		<div class="card-header card_header p-1">
			<div class="card-title">
				Ingredients				
			</div>
		</div>
	
		<div class="card-body p-1">
			@auth
				{!! $recipe->ingredients !!}
			@else
				@if(strlen($recipe->ingredients))
					{!! Str::limit($recipe->ingredients, $limit = 52, ' [More...]') !!}
				@endif
			@endif
		</div>
	
	</div>

</div>
