
<div class="card">

	<div class="card-header">
		Invoices
		<span class="float-right"><small><b>Total :</b> {{ $invoicesTotal->count() + $invoicesEstimates->count() }}</small></span>
	</div>
	
	<table class="table table-hover table-sm">
		<tr>
			<td><a href="{{ route('admin.invoicer.invoices', 'quotes') }}">Quotes</a></td>
			<td class="text-right">{{ $invoicesQuotes->count() }}</td>
		</tr>
		<tr>
			<td><a href="{{ route('admin.invoicer.invoices', 'estimates') }}">Estimates</a></td>
			<td class="text-right">{{ $invoicesEstimates->count() }}</td>
		</tr>
		<tr>
			<td><a href="{{ route('admin.invoicer.invoices', 'invoiced') }}">Invoiced</a></td>
			<td class="text-right">{{ $invoicesEstimates->count() }}</td>
		</tr>
		<tr>
			<td><a href="{{ route('admin.invoicer.invoices', 'paid') }}">Paid</a></td>
			<td class="text-right">{{ $invoicesPaid->count() }}</td>
		</tr>
		<tr>
			<td><a href="{{ route('admin.invoicer.invoices', 'workOrders') }}">Work Orders</a></td>
			<td class="text-right">{{ $invoicesWorkOrders->count() }}</td>
		</tr>
		<tr>
			<td><a href="{{ route('admin.invoicer.invoices', 'completed') }}">Completed</a></td>
			<td class="text-right">{{ $invoicesCompleted->count() }}</td>
		</tr>
		<tr>
			<td><a href="{{ route('admin.invoicer.invoices', 'shipped') }}">Shipped</a></td>
			<td class="text-right">{{ $invoicesShipped->count() }}</td>
		</tr>
		<tr>
			<td><a href="{{ route('admin.invoicer.invoices', 'pickedUp') }}">Picked Up</a></td>
			<td class="text-right">{{ $invoicesPickedUp->count() }}</td>
		</tr>
		<tr>
			<td><a href="{{ route('admin.invoicer.invoices', 'canceled') }}">Canceled</a></td>
			<td class="text-right">{{ $invoicesCanceled->count() }}</td>
		</tr>
	</table>

</div>