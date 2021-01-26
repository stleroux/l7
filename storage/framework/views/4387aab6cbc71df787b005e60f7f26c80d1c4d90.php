

<?php if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-delete')): ?>
	<button type="button"
	    class="destroy-model btn btn-sm btn-default"
	    data-toggle="modal"
	    data-target="#destroyModal"
	    data-id="<?php echo e($recipe->id); ?>"
	    data-url="<?php echo e(url('admin/recipes', $recipe)); ?>"
	    title="Trash Recipe"
	    >
	    <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
	</button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/actions/grid/destroy.blade.php ENDPATH**/ ?>