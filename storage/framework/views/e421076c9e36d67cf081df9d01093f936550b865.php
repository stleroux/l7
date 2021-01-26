

<?php if($recipe->published_at): ?>
	<button type="button"
	   class="unpublish-model btn btn-sm btn-default"
	   data-toggle="modal"
	   data-target="#unpublishModal"
	   data-id="<?php echo e($recipe->id); ?>"
	   data-url="<?php echo e(url('admin/recipes/unpublish', $recipe)); ?>"
	   title="Unpublish Recipe"
	   >
	   <i class="<?php echo e(config('icons.publish')); ?> text-warning"></i>
	</button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/actions/grid/unpublish.blade.php ENDPATH**/ ?>