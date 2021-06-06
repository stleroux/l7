<div class="col-sm-4">
	<div class="card card-secondary mb-2">
		
		<div class="card-header p-1">Image</div>
		
		<div class="card-body text text-center p-2">
			<?php if($recipe->image): ?>
				<img src="/_recipes/<?php echo e($recipe->image); ?>" alt="" height="200px" width="auto" class="card-img">
			<?php else: ?>
				<img src="/_recipes/image_not_available.jpg" alt="" height="200px" width="auto" class="card-img">
			<?php endif; ?>
		</div>

	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/recipes/show/fields/image.blade.php ENDPATH**/ ?>