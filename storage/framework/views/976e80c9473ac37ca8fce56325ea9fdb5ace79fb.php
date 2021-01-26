<?php if(Route::currentRouteName('') == 'admin.recipes.index'): ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.unpublish', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.resetViews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(Route::currentRouteName('') == 'admin.recipes.unpublished'): ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.publish', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.resetViews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(Route::currentRouteName('') == 'admin.recipes.new'): ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.resetViews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(Route::currentRouteName('') == 'admin.recipes.future'): ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.resetViews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(Route::currentRouteName('') == 'admin.recipes.trashed'): ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.restore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.recipes.index.actions.grid.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/actions.blade.php ENDPATH**/ ?>