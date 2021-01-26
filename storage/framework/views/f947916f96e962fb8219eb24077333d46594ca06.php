

<?php if($recipe->user_id == Auth::id() || Auth::user()->can('recipe-edit')): ?>
	<a href="<?php echo e(route('admin.recipes.edit', $recipe)); ?>" class="btn btn-sm btn-default" title="Edit Recipe">
   	<i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
	</a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/actions/grid/edit.blade.php ENDPATH**/ ?>