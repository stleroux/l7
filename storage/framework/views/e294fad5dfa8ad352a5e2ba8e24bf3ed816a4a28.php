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
			<table class="table table-sm table-hover">
				<thead>
					<tr class="d-flex">
						<th class="col-1">ID</th>
						<th class="col-1">Date</th>
						<th class="col-3">Activity Type</th>
						<th class="col-6">Comment</th>
						<th class="col-1">Amount</th>
						
					</tr>
				</thead>
				<tbody>
					
					<?php $__currentLoopData = $invoice->activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr class="d-flex <?php echo e(($item->activity == 'Remove Payment' || $item->activity == 'Remove Discount' || $item->activity == 'Remove Deposit' ? 'text-danger' : '')); ?>">
							<td class="col-1"><?php echo e($item->id); ?></td>
							<td class="col-1"nowrap="nowrap"><?php echo e($item->created_at); ?></td>
							<td class="col-3"><?php echo e($item->activity); ?></td>
							<td class="col-6"><?php echo e($item->comment); ?></td>
							<td class="col-1" nowrap="nowrap">$ <?php echo e($item->amount); ?></td>
							

										
										
										
					

										
										
										
											
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