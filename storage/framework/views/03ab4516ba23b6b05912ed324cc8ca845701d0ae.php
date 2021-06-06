<div class="card">

	<div class="card-header">
		Products
		<span class="float-right"><small><b>Total :</b> <?php echo e($productsCount); ?></small></span>
	</div>

	<?php if($products->count() > 0): ?>	
		<table class="table table-hover table-sm">
			<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($product->code); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	<?php else: ?>
		<div class="card-body p-2">
			<?php echo e(config('settings.noRecordsFound')); ?>

		</div>
	<?php endif; ?>

</div><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/dashboard/inc/products.blade.php ENDPATH**/ ?>