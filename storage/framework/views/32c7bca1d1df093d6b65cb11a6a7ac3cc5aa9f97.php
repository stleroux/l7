<div class="row-col">
	<div class="card">

		<div class="card-header">Billable Items</div>

		<?php if($invoice->invoiceItems->count() > 0): ?>
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
					<?php $__currentLoopData = $invoice->invoiceItems->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr class="d-flex">
							<td class="col-9"><?php echo e($item->product); ?></td>
							<td class="col-1 text-center" nowrap="nowrap"><?php echo e($item->quantity); ?></td>
							<td class="col-1 text-right" nowrap="nowrap"><?php echo e(number_format($item->price, 2, '.', ' ')); ?>$</td>
							<td class="col-1 text-right" nowrap="nowrap"><?php echo e(number_format($item->total, 2, '.', ' ')); ?>$</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php else: ?>
			<div class="card-body">
				No related billable items found.
			</div>
		<?php endif; ?>

	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/show/inc/billables.blade.php ENDPATH**/ ?>