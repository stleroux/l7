
	<div class="col-md-3">
		<div class="card card-secondary mb-2">
			<div class="card-header p-1">Source</div>
			<div class="card-body p-1 text-center text-dark">
				<?php if($recipe->source): ?>
					<?php echo e($recipe->source); ?>

				<?php else: ?>
					N/A
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/fields/source.blade.php ENDPATH**/ ?>