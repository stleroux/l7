<div class="card card-primary">

   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

      <?php echo $__env->make('admin.roles.actions.common.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php if(Route::currentRouteName() == 'admin.roles.index'): ?>
         <?php echo $__env->make('admin.roles.actions.mass.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>         
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.roles.trashed'): ?>
         <?php echo $__env->make('admin.roles.actions.mass.restore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.roles.actions.mass.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      
   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/roles/index/blocks/actions.blade.php ENDPATH**/ ?>