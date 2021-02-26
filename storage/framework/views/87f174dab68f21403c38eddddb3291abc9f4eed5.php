<div class="card card-primary">

   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

      <?php echo $__env->make('admin.actions.common.create', ['modelName'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      
      <?php if(Route::currentRouteName() == 'admin.users.approved'): ?>
         <?php echo $__env->make('admin.actions.mass.disable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      

      
      <?php if(Route::currentRouteName() == 'admin.users.disabled'): ?>
         <?php echo $__env->make('admin.actions.mass.approve', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      

      
      <?php if(Route::currentRouteName() != 'admin.users.trashed'): ?>
         <?php echo $__env->make('admin.actions.mass.destroy', ['modelName'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      


      
      <?php if(Route::currentRouteName() == 'admin.users.trashed'): ?>         
         <?php echo $__env->make('admin.actions.mass.restore', ['modelName'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.actions.mass.delete', ['modelName'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/index/blocks/actions.blade.php ENDPATH**/ ?>