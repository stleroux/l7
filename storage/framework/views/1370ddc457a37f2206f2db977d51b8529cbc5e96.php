

<?php if(Auth::user()->can('recipe-edit')): ?>
	<button type="button"
	    class="restore-model btn btn-sm btn-default"
	    data-toggle="modal"
	    data-target="#restoreModal"
	    data-id="<?php echo e($recipe->id); ?>"
	    data-url="<?php echo e(url('admin/recipes/restore', $recipe)); ?>"
	    title="Restore Recipe"
	    >
	    <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
	</button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/actions/grid/restore.blade.php ENDPATH**/ ?>