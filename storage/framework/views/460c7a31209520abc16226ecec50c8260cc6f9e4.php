

<?php if(Auth::user()->can('recipe-edit')): ?>
	<button type="button"
	    class="resetViews-model btn btn-sm btn-default"
	    data-toggle="modal"
	    data-target="#resetViewsModal"
	    data-id="<?php echo e($recipe->id); ?>"
	    data-url="<?php echo e(url('admin/recipes/resetViews', $recipe)); ?>"
	    title="Reset Views Count"
	    >
	    <i class="<?php echo e(config('icons.resetViews')); ?> text-secondary"></i>
	</button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/actions/grid/resetViews.blade.php ENDPATH**/ ?>