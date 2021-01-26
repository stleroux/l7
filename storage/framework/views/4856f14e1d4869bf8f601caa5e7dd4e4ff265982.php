

<?php if(Auth::user()->can('recipe-delete')): ?>
	<button type="button"
	    class="delete-model btn btn-sm btn-default"
	    data-toggle="modal"
	    data-target="#deleteModal"
	    data-id="<?php echo e($recipe->id); ?>"
	    data-url="<?php echo e(url('admin/recipes/delete', $recipe)); ?>"
	    title="Permanently Delete Recipe"
	    >
	    <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
	</button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/actions/grid/delete.blade.php ENDPATH**/ ?>