<div class="card">

	<div class="card-header">
		Products
		<span class="float-right"><small><b>Total :</b> {{ $productsCount }}</small></span>
	</div>

	@if($products->count() > 0)	
		<table class="table table-hover table-sm">
			@foreach($products as $product)
				<tr>
					<td>{{ $product->details }}</td>
				</tr>
			@endforeach
		</table>
	@else
		<div class="card-body p-2">
			{{ config('settings.noRecordsFound') }}
		</div>
	@endif

</div>