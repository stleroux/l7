@if(Auth::user()->id == $recipe->user_id)
	<div class="col-md-12">
		<div class="card card-trans-6 mb-2">
			<div class="card-header card_header p-2">Author's Private Notes <small>(Only showed to the creator of the item)</small></div>
			<div class="card-body card_body p-1 text-dark">
				@if ($recipe->private_notes) 
					{!! $recipe->private_notes !!}
				@else
					N/A
				@endif
			</div>
		</div>
	</div>
@endif