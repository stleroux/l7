
<div class="col-md-3">
	<div class="card card-trans-6 mb-2">
		<div class="card-header card_header p-2">Category</div>
		<div class="card-body card_body p-1 text-center text-dark">
         <?php if($recipe->category): ?>
            <?php echo e(ucwords($recipe->category->name)); ?>

         <?php else: ?>
            Not Specified
         <?php endif; ?>
      </div>
	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/show/category.blade.php ENDPATH**/ ?>