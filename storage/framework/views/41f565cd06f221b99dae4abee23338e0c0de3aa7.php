
<div class="col-md-3">
	<div class="card card-secondary mb-2">
		<div class="card-header p-1">Category</div>
		<div class="card-body p-1 text-center text-dark">
         <?php if($recipe->category): ?>
            <?php echo e(ucwords($recipe->category->name)); ?>

         <?php else: ?>
            Not Specified
         <?php endif; ?>
      </div>
	</div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/category.blade.php ENDPATH**/ ?>