
	<div class="col-md-3">
		<div class="card card-secondary mb-2">
			
			<div class="card-header p-1">
				Cook Time
			</div>
			
			<div class="card-body p-1 text-center text-dark">
				<?php if($recipe->cook_time_hours > 0): ?>
					<?php if($recipe->cook_time_hours == 1): ?>
						<?php echo e($recipe->cook_time_hours); ?> Hour
					<?php else: ?>
						<?php echo e($recipe->cook_time_hours); ?> Hours
					<?php endif; ?>
				<?php else: ?>
					<?php if($recipe->cook_time_minutes > 0): ?>
						<?php if($recipe->cook_time_minutes == 1): ?>
							<?php echo e($recipe->cook_time_minutes); ?> Minute
						<?php else: ?>
							<?php echo e($recipe->cook_time_minutes); ?> Minutes
						<?php endif; ?>
					<?php else: ?>
						N/A
					<?php endif; ?>
				<?php endif; ?>
			</div>

		</div>
	</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/fields/cook_time.blade.php ENDPATH**/ ?>