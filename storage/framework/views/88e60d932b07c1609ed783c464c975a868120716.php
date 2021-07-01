<div class="card pt-2">

	<div class="card-header">
		<span class="h3">Billable Items</span>
		
			<?php if($invoice->status == 'logged' || $invoice->status == 'estimate'): ?>
				<span class="float-right">
					<a href="<?php echo e(route('admin.invoicer.invoiceItems.create', $invoice->id)); ?>" class="btn btn-sm btn-primary">
						<i class="<?php echo e(config('icons.invoicer-newBillable')); ?>"></i>
						Add Billable
					</a>
				</span>
			<?php endif; ?>
		
	</div>

	
		<?php if($invoice->invoiceItems->count() > 0): ?>
			<table class="table table-sm table-striped">
				<thead>
					<tr>
						<th>Product</th>
						
						<th>Notes</th>
						<th class="text-center">Quantity</th>
						<th class="text-right">Unit Price</th>
						
						<th class="text-right">Total</th>
						<?php if($invoice->status == 'logged'): ?>
							<th></th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
					
					<?php $__currentLoopData = $invoice->invoiceItems->sortByDesc('id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td>
								
								<?php echo e($item->product); ?>

							</td>
							
							<td><?php echo nl2br(e($item->notes)); ?></td>
							<td class="text-center"><?php echo e($item->quantity); ?></td>
							<td class="text-right" nowrap="nowrap"><?php echo e(number_format($item->price, 2, '.', ' ')); ?>$</td>
							
							<td class="text-right" nowrap="nowrap"><?php echo e(number_format($item->total, 2, '.', ' ')); ?>$</td>
							<?php if($invoice->status == 'estimate' || $invoice->status == 'logged' || $invoice->status == 'quote'): ?>
								<td class="text-right" nowrap="nowrap">
									<form action="<?php echo e(route('admin.invoicer.invoiceItems.destroy',[$item->id])); ?>" method="POST" onsubmit="return confirm('Do you really want to delete this billable item?');"
										class="pull-right">
										<?php echo e(csrf_field()); ?>

										<input type="hidden" name="_method" value="DELETE" />

										
											<a href="<?php echo e(route('admin.invoicer.invoiceItems.edit', $item->id)); ?>" class="btn btn-sm btn-primary">
												<i class="fa fa-edit"></i>
												Edit
											</a>
										
										
										
											<button type="submit" class="btn btn-sm btn-danger">
												<i class="fa fa-trash-alt"></i>
												Delete
											</button>
										
									</form>
								</td>
							<?php endif; ?>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php else: ?>
			<div class="card-body">
				No billable items found for this invoice.
			</div>
		<?php endif; ?>
	
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/billables.blade.php ENDPATH**/ ?>