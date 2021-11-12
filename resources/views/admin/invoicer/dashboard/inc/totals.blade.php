<div class="card">
	<div class="card-header">
		Statistics
	</div>

	<table class="table table-hover table-sm">
		<thead>
			<tr>
				<th></th>
				<th class="text-right">Charged</th>
				<th class="text-right">HST</th>
				<th class="text-right">SubTotal</th>
				<th class="text-right">Deposits</th>
				<th class="text-right">Discounts</th>
				<th class="text-right">Payments</th>
				{{-- <th class="text-right">WSIB</th> --}}
				{{-- <th class="text-right">Income Taxes</th> --}}
				{{-- <th class="text-right">Total Deductions</th> --}}
				<th class="text-right">Total Owed</th>
			</tr>
		</thead>

		<tbody>

			<tr class="">
				<th>Quotes</th>
				<td class="text-right">{{ number_format($invoicesQuotes->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesQuotes->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesQuotes->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesQuotes->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesQuotes->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesQuotes->sum('payments'), 2, '.', ', ') }}$</td>
				{{-- <td class="text-right">{{ number_format($invoicesQuotes->sum('wsib'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesQuotes->sum('income_taxes'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesQuotes->sum('total_deductions'), 2, '.', ', ') }}$</td> --}}
				<td class="text-right">{{ number_format($invoicesQuotes->sum('total'), 2, '.', ', ') }}$</td>
			</tr>
			<tr class="">
				<th>Estimates</th>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('payments'), 2, '.', ', ') }}$</td>
				{{-- <td class="text-right">{{ number_format($invoicesEstimates->sum('wsib'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesEstimates->sum('income_taxes'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesEstimates->sum('total_deductions'), 2, '.', ', ') }}$</td> --}}
				<td class="text-right">{{ number_format($invoicesEstimates->sum('total'), 2, '.', ', ') }}$</td>
			</tr>

			<tr class="table-warning font-weight-bold">
				<th>Subtotal</th>
				<td class="text-right">{{ number_format($invoicesSubTotal->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesSubTotal->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesSubTotal->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesSubTotal->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesSubTotal->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesSubTotal->sum('payments'), 2, '.', ', ') }}$</td>
				{{-- <td class="text-right">{{ number_format($invoicesSubTotal->sum('wsib'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesSubTotal->sum('income_taxes'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesSubTotal->sum('total_deductions'), 2, '.', ', ') }}$</td> --}}
				<td class="text-right">{{ number_format($invoicesSubTotal->sum('total'), 2, '.', ', ') }}$</td>
			</tr>

			<tr class="">
				<th>Invoiced</th>
				<td class="text-right">{{ number_format($invoicesInvoiced->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesInvoiced->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesInvoiced->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesInvoiced->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesInvoiced->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesInvoiced->sum('payments'), 2, '.', ', ') }}$</td>
				{{-- <td class="text-right">{{ number_format($invoicesInvoiced->sum('wsib'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesInvoiced->sum('income_taxes'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesInvoiced->sum('total_deductions'), 2, '.', ', ') }}$</td> --}}
				<td class="text-right">{{ number_format($invoicesInvoiced->sum('total'), 2, '.', ', ') }}$</td>
			</tr>

			<tr>
				<th>Paid</th>
				<td class="text-right">{{ number_format($invoicesPaid->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesPaid->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesPaid->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesPaid->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesPaid->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesPaid->sum('payments'), 2, '.', ', ') }}$</td>
				{{-- <td class="text-right">{{ number_format($invoicesPaid->sum('wsib'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesPaid->sum('income_taxes'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesPaid->sum('total_deductions'), 2, '.', ', ') }}$</td> --}}
				<td class="text-right">{{ number_format($invoicesPaid->sum('total'), 2, '.', ', ') }}$</td>
			</tr>

			<tr>
				<th>Work-Orders</th>
				<td class="text-right">{{ number_format($invoicesWorkOrders->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesWorkOrders->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesWorkOrders->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesWorkOrders->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesWorkOrders->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesWorkOrders->sum('payments'), 2, '.', ', ') }}$</td>
				{{-- <td class="text-right">{{ number_format($invoicesWorkOrders->sum('wsib'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesWorkOrders->sum('income_taxes'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesWorkOrders->sum('total_deductions'), 2, '.', ', ') }}$</td> --}}
				<td class="text-right">{{ number_format($invoicesWorkOrders->sum('total'), 2, '.', ', ') }}$</td>
			</tr>

			<tr>
				<th>Completed</t>
				<td class="text-right">{{ number_format($invoicesCompleted->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesCompleted->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesCompleted->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesCompleted->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesCompleted->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesCompleted->sum('payments'), 2, '.', ', ') }}$</td>
				{{-- <td class="text-right">{{ number_format($invoicesCompleted->sum('wsib'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesCompleted->sum('income_taxes'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesCompleted->sum('total_deductions'), 2, '.', ', ') }}$</td> --}}
				<td class="text-right">{{ number_format($invoicesCompleted->sum('total'), 2, '.', ', ') }}$</td>
			</tr>

			<tr>
				<th>Shipped</th>
				<td class="text-right">{{ number_format($invoicesShipped->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesShipped->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesShipped->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesShipped->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesShipped->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesShipped->sum('payments'), 2, '.', ', ') }}$</td>
				{{-- <td class="text-right">{{ number_format($invoicesShipped->sum('wsib'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesShipped->sum('income_taxes'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesShipped->sum('total_deductions'), 2, '.', ', ') }}$</td> --}}
				<td class="text-right">{{ number_format($invoicesShipped->sum('total'), 2, '.', ', ') }}$</td>
			</tr>
			<tr>
				<th>Picked Up</th>
				<td class="text-right">{{ number_format($invoicesPickedUp->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesPickedUp->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesPickedUp->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesPickedUp->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesPickedUp->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesPickedUp->sum('payments'), 2, '.', ', ') }}$</td>
				{{-- <td class="text-right">{{ number_format($invoicesPickedUp->sum('wsib'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesPickedUp->sum('income_taxes'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesPickedUp->sum('total_deductions'), 2, '.', ', ') }}$</td> --}}
				<td class="text-right">{{ number_format($invoicesPickedUp->sum('total'), 2, '.', ', ') }}$</td>
			</tr>

			<tr class="table-danger">
				<th>Canceled</th>
				<td class="text-right">{{ number_format($invoicesCanceled->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesCanceled->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesCanceled->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesCanceled->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesCanceled->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesCanceled->sum('payments'), 2, '.', ', ') }}$</td>
				{{-- <td class="text-right">{{ number_format($invoicesCanceled->sum('wsib'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesCanceled->sum('income_taxes'), 2, '.', ', ') }}$</td> --}}
				{{-- <td class="text-right">{{ number_format($invoicesCanceled->sum('total_deductions'), 2, '.', ', ') }}$</td> --}}
				<td class="text-right">{{ number_format($invoicesCanceled->sum('total'), 2, '.', ', ') }}$</td>
			</tr>
			{{-- <tr class="table-success font-weight-bold">
				<th>Total Invoices</th>
				<td class="text-right">{{ number_format($invoicesTotal->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesTotal->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesTotal->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesTotal->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesTotal->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesTotal->sum('payments'), 2, '.', ', ') }}$</td>
				<!-- <td class="text-right">{{ number_format($invoicesTotal->sum('wsib'), 2, '.', ', ') }}$</td> -->
				<!-- <td class="text-right">{{ number_format($invoicesTotal->sum('income_taxes'), 2, '.', ', ') }}$</td> -->
				<!-- <td class="text-right">{{ number_format($invoicesTotal->sum('total_deductions'), 2, '.', ', ') }}$</td> -->
				<td class="text-right">{{ number_format($invoicesTotal->sum('total'), 2, '.', ', ') }}$</td>
			</tr> --}}

{{-- 			<tr class="table-warning">
				<th>Estimates</th>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('payments'), 2, '.', ', ') }}$</td>
				<!-- <td class="text-right">{{ number_format($invoicesEstimates->sum('wsib'), 2, '.', ', ') }}$</td> -->
				<!-- <td class="text-right">{{ number_format($invoicesEstimates->sum('income_taxes'), 2, '.', ', ') }}$</td> -->
				<!-- <td class="text-right">{{ number_format($invoicesEstimates->sum('total_deductions'), 2, '.', ', ') }}$</td> -->
				<td class="text-right">
					@php
						$ac = $invoicesEstimates->sum('amount_charged');
						$hst = $invoicesEstimates->sum('hst');
						$deposits = $invoicesEstimates->sum('deposits');
						$discounts = $invoicesEstimates->sum('discounts');
						$payments = $invoicesEstimates->sum('payments');
						$total = $ac + $hst - $deposits - $discounts - $payments;
						// dd($total);
					@endphp
					{{ number_format($total, 2, '.', ', ') }}
					$
				</td>
			</tr> --}}

			<tr class="table-primary font-weight-bold">
				<th>Overall Total</th>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('amount_charged') + $invoicesTotal->sum('amount_charged'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('hst') + $invoicesTotal->sum('hst'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('sub_total') + $invoicesTotal->sum('sub_total'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('deposits') + $invoicesTotal->sum('deposits'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('discounts') + $invoicesTotal->sum('discounts'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('payments') + $invoicesTotal->sum('payments'), 2, '.', ', ') }}$</td>
				<td class="text-right">{{ number_format($invoicesEstimates->sum('total') + $invoicesTotal->sum('total'), 2, '.', ', ') }}$</td>
			</tr>

		</tbody>
	</table>

</div>
