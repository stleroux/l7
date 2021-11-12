<div class="col-md-3">

	<div class="card card-trans-6 mb-2">

		<div class="card-header card_header p-1">
			<div class="card-title">
				Servings				
			</div>
		</div>

		<div class="card-body p-1 text-center text-dark">
         <?php if($recipe->servings): ?>
				<?php echo e($recipe->servings); ?>

			<?php else: ?>
				N/A
			<?php endif; ?>
      </div>

	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/servings.blade.php ENDPATH**/ ?>