<div class="card card-primary">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <?php echo $__env->make('admin.actions.common.create', ['modelName'=>'finish'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <?php if(Route::currentRouteName() == 'admin.finishes.index'): ?>
         <?php echo $__env->make('admin.actions.mass.destroy', ['modelName'=>'finish'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.finishes.trashed'): ?>
         <?php echo $__env->make('admin.actions.mass.restore', ['modelName'=>'finish'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.delete', ['modelName'=>'finish'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      
   </div>
</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/finishes/index/blocks/actions.blade.php ENDPATH**/ ?>