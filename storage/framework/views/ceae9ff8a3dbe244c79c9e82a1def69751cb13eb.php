
	<div class="col-md-3">
		<div class="card card-trans-6 mb-2">
			
			<div class="card-header card_header p-2">
				Cook Time
			</div>
			
			<div class="card-body p-1 text-center text-dark">
				<?php if(($recipe->cook_time_hours > 0) && ($recipe->cook_time_minutes > 0)): ?>
               <?php echo e($recipe->cook_time_hours > 1 ? $recipe->cook_time_hours . ' hours' : $recipe->cook_time_hours .' hour'); ?>

               <?php echo e($recipe->cook_time_minutes > 1 ? $recipe->cook_time_minutes . ' minutes' : $recipe->cook_time_minutes .' minute'); ?>

            <?php elseif(($recipe->cook_time_hours > 0) && (!$recipe->cook_time_minutes)): ?>
               <?php echo e($recipe->cook_time_hours > 1 ? $recipe->cook_time_hours . ' hours' : $recipe->cook_time_hours .' hour'); ?>

            <?php elseif((!$recipe->cook_time_hours) && ($recipe->cook_time_minutes > 0)): ?>
               <?php echo e($recipe->cook_time_minutes > 1 ? $recipe->cook_time_minutes . ' minutes' : $recipe->cook_time_minutes .' minute'); ?>

            <?php else: ?>
               N/A
            <?php endif; ?>
			</div>

		</div>
	</div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/cook_time.blade.php ENDPATH**/ ?>