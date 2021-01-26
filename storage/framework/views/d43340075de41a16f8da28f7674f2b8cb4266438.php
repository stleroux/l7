<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      <?php echo $__env->make('admin.recipes.index.sections.functions.actions.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <?php if(Route::currentRouteName() == 'admin.recipes.index'): ?>
         <?php echo $__env->make('admin.recipes.index.sections.functions.actions.unpublish', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.recipes.index.sections.functions.actions.resetViews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.recipes.index.sections.functions.actions.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.recipes.unpublished'): ?>
         <?php echo $__env->make('admin.recipes.index.sections.functions.actions.publish', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.recipes.index.sections.functions.actions.resetViews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.recipes.index.sections.functions.actions.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.recipes.trashed'): ?>
         <?php echo $__env->make('admin.recipes.index.sections.functions.actions.restore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.recipes.index.sections.functions.actions.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/sections/functions/actions.blade.php ENDPATH**/ ?>