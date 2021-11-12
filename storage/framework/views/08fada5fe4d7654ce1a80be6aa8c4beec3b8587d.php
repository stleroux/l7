<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <?php echo $__env->make('admin.actions.common.create', ['modelName'=>'carving'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <?php if(Route::currentRouteName() == 'admin.carvings.index'): ?>
         <?php echo $__env->make('admin.actions.mass.resetViews', ['modelName'=>'carving'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.destroy', ['modelName'=>'carving'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.carvings.trashed'): ?>
         <?php echo $__env->make('admin.actions.mass.restore', ['modelName'=>'carving'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.delete', ['modelName'=>'carving'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/index/blocks/actions.blade.php ENDPATH**/ ?>