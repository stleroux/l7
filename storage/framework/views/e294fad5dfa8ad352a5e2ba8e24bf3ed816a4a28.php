<div class="card pt-2">

	<div class="card-header">
		<span class="h3">Activity</span>
		
			
			
<?php if($invoice->status != 'paid' && $invoice->invoiceItems->count() > 0): ?>
				<span class="float-right">
					<a href="<?php echo e(route('admin.invoicer.activities.create', $invoice)); ?>" class="btn btn-sm btn-primary">
						<i class="far fa-plus-square"></i>
						New Activity
					</a>
				</span>
			<?php endif; ?>
		
	</div>

	
		<?php if($invoice->activities->count() > 0): ?>
			<table class="table table-sm table-striped">
				<thead>
					<tr class="d-flex">
						<th class="col-1">ID</th>
						<th class="col-2">Date</th>
						<th class="col-5">Activity Type</th>
						<th class="col-2">Amount</th>
						<th class="col-2"></th>
					</tr>
				</thead>
				<tbody>
					
					<?php $__currentLoopData = $invoice->activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr class="d-flex">
							<td class="col-1"><?php echo e($item->id); ?></td>
							<td class="col-2"nowrap="nowrap"><?php echo e($item->created_at); ?></td>
							<td class="col-5"><?php echo e($item->activity); ?></td>
							<td class="col-2" nowrap="nowrap">$ <?php echo e($item->amount); ?></td>
							<td class="col-2">
								<form action="<?php echo e(route('admin.invoicer.activities.destroy',[$item->id])); ?>" method="POST" onsubmit="return confirm('Do you really want to delete this activity item?');"
										class="float-right">
										<?php echo e(csrf_field()); ?>

										<input type="hidden" name="_method" value="DELETE" />

										
										
										<?php if($invoice->status != 'paid' && $invoice->invoiceItems->count() > 0): ?>
											<a href="<?php echo e(route('admin.invoicer.activities.edit', $item->id)); ?>" class="btn btn-sm btn-primary">
												<i class="fa fa-edit"></i>
												Edit
											</a>
										
										
										
											<button type="submit" class="btn btn-sm btn-danger">
												<i class="fa fa-trash-alt"></i>
												Delete
											</button>
										<?php endif; ?>
									</form>
							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php else: ?>
			<div class="card-body">
				No activities found for this invoice.
			</div>
		<?php endif; ?>
	
</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/invoices/edit/activities.blade.php ENDPATH**/ ?>