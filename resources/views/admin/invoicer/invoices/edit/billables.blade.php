<div class="card pt-2">

	<div class="card-header">
		<span class="h3">Billable Items</span>
		{{-- @if(checkPerm('invoicer_invoice_edit')) --}}
			@if($invoice->status == 'quote' || $invoice->status == 'estimate')
				<span class="float-right">
					<a href="{{ route('admin.invoicer.invoiceItems.create', [$invoice->id, 'type'=>$invoice->status]) }}" class="btn btn-sm btn-secondary">
						<i class="{{ config('icons.invoicer-newBillable') }}"></i>
						Add Billable
					</a>
				</span>
			@endif
		{{-- @endif --}}
	</div>

	{{-- <div class="card-body"> --}}
		@if($invoice->invoiceItems->count() > 0)
			<table class="table table-sm table-striped">
				<thead>
					<tr>
						<th>Product</th>
						{{-- <th>Work Date</th> --}}
						<th>Notes</th>
						<th class="text-center">Quantity</th>
						<th class="text-right">Unit Price</th>
						{{-- <th class="text-right">HST</th> --}}
						<th class="text-right">Total</th>
						@if($invoice->status == 'logged')
							<th></th>
						@endif
					</tr>
				</thead>
				<tbody>
					{{-- @foreach($invoice->invoiceItems->sortByDesc('work_date') as $item) --}}
					@foreach($invoice->invoiceItems->sortByDesc('id') as $item)
						<tr>
							<td>
								{{-- {{ $item->product->details }} --}}
								{{ $item->product }}
							</td>
							{{-- <td nowrap="nowrap">{{ $item->work_date }}</td> --}}
							<td>{!! nl2br(e($item->notes)) !!}</td>
							<td class="text-center">{{ $item->quantity }}</td>
							<td class="text-right" nowrap="nowrap">{{ number_format($item->price, 2, '.', ' ') }}$</td>
							{{-- <td class="text-right" nowrap="nowrap">{{ number_format($item->hst, 2, '.', ' ') }}$</td> --}}
							<td class="text-right" nowrap="nowrap">{{ number_format($item->total, 2, '.', ' ') }}$</td>
							@if($invoice->status == 'estimate' || $invoice->status == 'logged' || $invoice->status == 'quote')
								<td class="text-right" nowrap="nowrap">
									<form action="{{ route('admin.invoicer.invoiceItems.destroy',[$item->id]) }}" method="POST" onsubmit="return confirm('Do you really want to delete this billable item?');"
										class="pull-right">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="DELETE" />

										{{-- @if(checkPerm('invoicer_invoice_edit')) --}}
											<a href="{{ route('admin.invoicer.invoiceItems.edit', $item->id) }}" class="btn btn-sm btn-primary">
												<i class="fa fa-edit"></i>
												Edit
											</a>
										{{-- @endif --}}
										
										{{-- @if(checkPerm('invoicer_invoice_edit')) --}}
											<button type="submit" class="btn btn-sm btn-danger">
												<i class="fa fa-trash-alt"></i>
												Delete
											</button>
										{{-- @endif --}}
									</form>
								</td>
							@endif
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<div class="card-body">
				No billable items found for this invoice.
			</div>
		@endif
	{{-- </div> --}}
</div>
