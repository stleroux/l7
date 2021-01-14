
<div class="card">

	<div class="card-header">
		Invoices
		<span class="float-right"><small><b>Total :</b> <?php echo e($invoicesTotal->count()); ?></small></span>
	</div>
	
	<table class="table table-hover table-sm">
		<tr>
			<td>
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-invoice')): ?>
					<a href="<?php echo e(route('admin.invoicer.invoices.logged')); ?>">Logged</a>
				<?php else: ?>
					Logged
				<?php endif; ?>
			</td>
			<td class="text-right"><?php echo e($invoicesLogged->count()); ?></td>
		</tr>
		<tr>
			<td>
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-invoice')): ?>
					<a href="<?php echo e(route('admin.invoicer.invoices.invoiced')); ?>">Invoiced</a>
				<?php else: ?>
					Invoiced
				<?php endif; ?>
			</td>
			<td class="text-right"><?php echo e($invoicesInvoiced->count()); ?></td>
		</tr>
		<tr>
			<td>
				<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-invoice')): ?>
					<a href="<?php echo e(route('admin.invoicer.invoices.paid')); ?>">Paid</a>
				<?php else: ?>
					Paid
				<?php endif; ?>
			</td>
			<td class="text-right"><?php echo e($invoicesPaid->count()); ?></td>
		</tr>
	</table>

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/dashboard/inc/invoices.blade.php ENDPATH**/ ?>