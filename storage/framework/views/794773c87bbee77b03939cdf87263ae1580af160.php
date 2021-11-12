<div class="col-md-3">

	<div class="card card-trans-6 mb-2">

		<div class="card-header card_header p-1">
			<div class="card-title">
				Source				
			</div>
		</div>

		<div class="card-body p-1 text-center text-dark">
			<?php if($recipe->source): ?>
				<?php echo e($recipe->source); ?>

			<?php else: ?>
				N/A
			<?php endif; ?>
		</div>

	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/source.blade.php ENDPATH**/ ?>