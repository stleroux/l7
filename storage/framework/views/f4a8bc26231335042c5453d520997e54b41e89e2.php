
<div class="card">

	<div class="card-header">
		Invoices
		<span class="float-right"><small><b>Total :</b> <?php echo e($invoicesTotal->count() + $invoicesEstimates->count()); ?></small></span>
	</div>
	
	<table class="table table-hover table-sm">
		<tr>
			<td><a href="<?php echo e(route('admin.invoicer.invoices', 'quotes')); ?>">Quotes</a></td>
			<td class="text-right"><?php echo e($invoicesQuotes->count()); ?></td>
		</tr>
		<tr>
			<td><a href="<?php echo e(route('admin.invoicer.invoices', 'estimates')); ?>">Estimates</a></td>
			<td class="text-right"><?php echo e($invoicesEstimates->count()); ?></td>
		</tr>
		<tr>
			<td><a href="<?php echo e(route('admin.invoicer.invoices', 'invoiced')); ?>">Invoiced</a></td>
			<td class="text-right"><?php echo e($invoicesEstimates->count()); ?></td>
		</tr>
		<tr>
			<td><a href="<?php echo e(route('admin.invoicer.invoices', 'paid')); ?>">Paid</a></td>
			<td class="text-right"><?php echo e($invoicesPaid->count()); ?></td>
		</tr>
		<tr>
			<td><a href="<?php echo e(route('admin.invoicer.invoices', 'workOrders')); ?>">Work Orders</a></td>
			<td class="text-right"><?php echo e($invoicesWorkOrders->count()); ?></td>
		</tr>
		<tr>
			<td><a href="<?php echo e(route('admin.invoicer.invoices', 'completed')); ?>">Completed</a></td>
			<td class="text-right"><?php echo e($invoicesCompleted->count()); ?></td>
		</tr>
		<tr>
			<td><a href="<?php echo e(route('admin.invoicer.invoices', 'shipped')); ?>">Shipped</a></td>
			<td class="text-right"><?php echo e($invoicesShipped->count()); ?></td>
		</tr>
		<tr>
			<td><a href="<?php echo e(route('admin.invoicer.invoices', 'pickedUp')); ?>">Picked Up</a></td>
			<td class="text-right"><?php echo e($invoicesPickedUp->count()); ?></td>
		</tr>
		<tr>
			<td><a href="<?php echo e(route('admin.invoicer.invoices', 'canceled')); ?>">Canceled</a></td>
			<td class="text-right"><?php echo e($invoicesCanceled->count()); ?></td>
		</tr>
	</table>

</div><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/dashboard/inc/invoices.blade.php ENDPATH**/ ?>