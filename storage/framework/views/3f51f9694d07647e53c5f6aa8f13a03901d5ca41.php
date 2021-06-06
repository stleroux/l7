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
				
				
				
				<th class="text-right">Total Owed</th>
			</tr>
		</thead>

		<tbody>

			<tr>
				<th>Logged</th>
				<td class="text-right"><?php echo e(number_format($invoicesLogged->sum('amount_charged'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesLogged->sum('hst'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesLogged->sum('sub_total'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesLogged->sum('deposits'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesLogged->sum('discounts'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesLogged->sum('payments'), 2, '.', ', ')); ?>$</td>
				
				
				
				<td class="text-right"><?php echo e(number_format($invoicesLogged->sum('total'), 2, '.', ', ')); ?>$</td>
			</tr>

			<tr>
				<th>Invoiced</th>
				<td class="text-right"><?php echo e(number_format($invoicesInvoiced->sum('amount_charged'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesInvoiced->sum('hst'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesInvoiced->sum('sub_total'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesInvoiced->sum('deposits'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesInvoiced->sum('discounts'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesInvoiced->sum('payments'), 2, '.', ', ')); ?>$</td>
				
				
				
				<td class="text-right"><?php echo e(number_format($invoicesInvoiced->sum('total'), 2, '.', ', ')); ?>$</td>
			</tr>

			<tr>
				<th>Paid</th>
				<td class="text-right"><?php echo e(number_format($invoicesPaid->sum('amount_charged'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesPaid->sum('hst'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesPaid->sum('sub_total'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesPaid->sum('deposits'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesPaid->sum('discounts'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesPaid->sum('payments'), 2, '.', ', ')); ?>$</td>
				
				
				
				<td class="text-right"><?php echo e(number_format($invoicesPaid->sum('total'), 2, '.', ', ')); ?>$</td>
			</tr>

			<tr class="table-success font-weight-bold">
				<th>Total Invoices</th>
				<td class="text-right"><?php echo e(number_format($invoicesTotal->sum('amount_charged'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesTotal->sum('hst'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesTotal->sum('sub_total'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesTotal->sum('deposits'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesTotal->sum('discounts'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesTotal->sum('payments'), 2, '.', ', ')); ?>$</td>
				
				
				
				<td class="text-right"><?php echo e(number_format($invoicesTotal->sum('total'), 2, '.', ', ')); ?>$</td>
			</tr>

			<tr class="table-warning">
				<th>Estimates</th>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('amount_charged'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('hst'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('sub_total'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('deposits'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('discounts'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('payments'), 2, '.', ', ')); ?>$</td>
				
				
				
				<td class="text-right">
					<?php
						$ac = $invoicesEstimates->sum('amount_charged');
						$hst = $invoicesEstimates->sum('hst');
						$deposits = $invoicesEstimates->sum('deposits');
						$discounts = $invoicesEstimates->sum('discounts');
						$payments = $invoicesEstimates->sum('payments');
						$total = $ac + $hst - $deposits - $discounts - $payments;
						// dd($total);
					?>
					<?php echo e(number_format($total, 2, '.', ', ')); ?>

					$
				</td>
			</tr>

			<tr class="table-primary font-weight-bold">
				<th>Overall Total</th>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('amount_charged') + $invoicesTotal->sum('amount_charged'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('hst') + $invoicesTotal->sum('hst'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('sub_total') + $invoicesTotal->sum('sub_total'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('deposits') + $invoicesTotal->sum('deposits'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('discounts') + $invoicesTotal->sum('discounts'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('payments') + $invoicesTotal->sum('payments'), 2, '.', ', ')); ?>$</td>
				<td class="text-right"><?php echo e(number_format($invoicesEstimates->sum('total') + $invoicesTotal->sum('total'), 2, '.', ', ')); ?>$</td>
			</tr>

		</tbody>
	</table>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/dashboard/inc/totals.blade.php ENDPATH**/ ?>