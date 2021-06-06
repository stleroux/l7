<?php if(Route::currentRouteName('') == 'admin.recipes.index'): ?>
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.unpublish', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.resetViews', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(Route::currentRouteName('') == 'admin.recipes.unpublished'): ?>
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.publish', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.resetViews', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(Route::currentRouteName('') == 'admin.recipes.new'): ?>
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.resetViews', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(Route::currentRouteName('') == 'admin.recipes.future'): ?>
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.resetViews', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if(Route::currentRouteName('') == 'admin.recipes.trashed'): ?>
   <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/recipes/index/actions.blade.php ENDPATH**/ ?>