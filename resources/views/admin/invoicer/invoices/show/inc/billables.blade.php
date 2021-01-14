<div class="row-col">
	<div class="card">

		<div class="card-header">Billable Items</div>

		@if($invoice->invoiceItems->count() > 0)
			<table class="table table-sm table-striped">
				<thead>
					<tr class="d-flex">
						<th class="col-9">Product</th>
						<th class="col-1 text-center">Quantity</th>
						<th class="col-1 text-right">Price</th>
						<th class="col-1 text-right">Amount</th>
					</tr>
				</thead>
				<tbody>
					@foreach($invoice->invoiceItems->sortByDesc('id') as $item)
						<tr class="d-flex">
							<td class="col-9">{{ $item->product }}</td>
							<td class="col-1 text-center" nowrap="nowrap">{{ $item->quantity }}</td>
							<td class="col-1 text-right" nowrap="nowrap">{{ number_format($item->price, 2, '.', ' ') }}$</td>
							<td class="col-1 text-right" nowrap="nowrap">{{ number_format($item->total, 2, '.', ' ') }}$</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<div class="card-body">
				No related billable items found.
			</div>
		@endif

	</div>
</div>
