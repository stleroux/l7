
<div class="card">

	<div class="card-header">
		Invoices
		<span class="float-right"><small><b>Total :</b> {{ $invoicesTotal->count() }}</small></span>
	</div>
	
	<table class="table table-hover table-sm">
		<tr>
			<td>
				@can('invoicer-invoice')
					<a href="{{ route('admin.invoicer.invoices.estimates') }}">Estimates</a>
				@else
					Estimates
				@endcan
			</td>
			<td class="text-right">{{ $invoicesEstimates->count() }}</td>
		</tr>
		<tr>
			<td>
				@can('invoicer-invoice')
					<a href="{{ route('admin.invoicer.invoices.logged') }}">Logged</a>
				@else
					Logged
				@endcan
			</td>
			<td class="text-right">{{ $invoicesLogged->count() }}</td>
		</tr>
		<tr>
			<td>
				@can('invoicer-invoice')
					<a href="{{ route('admin.invoicer.invoices.invoiced') }}">Invoiced</a>
				@else
					Invoiced
				@endcan
			</td>
			<td class="text-right">{{ $invoicesInvoiced->count() }}</td>
		</tr>
		<tr>
			<td>
				@can('invoicer-invoice')
					<a href="{{ route('admin.invoicer.invoices.paid') }}">Paid</a>
				@else
					Paid
				@endcan
			</td>
			<td class="text-right">{{ $invoicesPaid->count() }}</td>
		</tr>
	</table>

</div>