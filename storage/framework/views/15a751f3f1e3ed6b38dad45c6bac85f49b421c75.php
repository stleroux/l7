<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <?php echo $__env->make('admin.actions.common.create', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php if(Route::currentRouteName() == 'admin.posts.index'): ?>
         <?php echo $__env->make('admin.actions.mass.unpublish', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.destroy', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.posts.unpublished'): ?>
         <?php echo $__env->make('admin.actions.mass.publish', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.resetViews', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.destroy', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.posts.new'): ?>
         <?php echo $__env->make('admin.actions.mass.publish', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.resetViews', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.destroy', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.posts.future'): ?>
         <?php echo $__env->make('admin.actions.mass.publish', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.resetViews', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.destroy', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.posts.trashed'): ?>
         <?php echo $__env->make('admin.actions.mass.restore', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.delete', ['modelName'=>'post'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/index/blocks/actions.blade.php ENDPATH**/ ?>