
	<div class="col-md-3">
		<div class="card card-trans-6 mb-2">
			<div class="card-header card_header p-2">Prep Time</div>
			<div class="card-body p-1 text-center text-dark">
            <?php if(($recipe->prep_time_hours > 0) && ($recipe->prep_time_minutes > 0)): ?>
               <?php echo e($recipe->prep_time_hours > 1 ? $recipe->prep_time_hours . ' hours' : $recipe->prep_time_hours .' hour'); ?>

               <?php echo e($recipe->prep_time_minutes > 1 ? $recipe->prep_time_minutes . ' minutes' : $recipe->prep_time_minutes .' minute'); ?>

            <?php elseif(($recipe->prep_time_hours > 0) && (!$recipe->prep_time_minutes)): ?>
               <?php echo e($recipe->prep_time_hours > 1 ? $recipe->prep_time_hours . ' hours' : $recipe->prep_time_hours .' hour'); ?>

            <?php elseif((!$recipe->prep_time_hours) && ($recipe->prep_time_minutes > 0)): ?>
               <?php echo e($recipe->prep_time_minutes >= 1 ? $recipe->prep_time_minutes . ' minutes' : $recipe->prep_time_minutes .' minute'); ?>

            <?php else: ?>
               N/A
            <?php endif; ?>
         </div>
		</div>
	</div>

<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/prep_time.blade.php ENDPATH**/ ?>