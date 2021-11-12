
	<div class="col-md-3">
		<div class="card card-secondary mb-2">
			<div class="card-header p-1">Servings</div>
			<div class="card-body p-1 text-center text-dark">
            <?php if($recipe->servings): ?>
					<?php echo e($recipe->servings); ?>

				<?php else: ?>
					N/A
				<?php endif; ?>
         </div>
		</div>
	</div>
<?php /**PATH C:\sites\l7\resources\views/admin/recipes/show/fields/servings.blade.php ENDPATH**/ ?>