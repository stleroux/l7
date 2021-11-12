<div class="col-sm-4">
	<div class="card card-trans-6 mb-2">
		
		<div class="card-header card_header p-1">
			<div class="card-title">
				Image				
			</div>
		</div>
		
		<div class="card-body text text-center p-1">
			<?php if($recipe->image): ?>
				<img src="/_recipes/<?php echo e($recipe->image); ?>" alt="" height="200px" width="auto" class="card-img">
			<?php else: ?>
				<img src="/_recipes/image_not_available.jpg" alt="" height="200px" width="auto" class="card-img">
			<?php endif; ?>
		</div>

	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/image.blade.php ENDPATH**/ ?>