<?php if(!$user->deleted_at): ?>
   
   <?php echo $__env->make('admin.actions.grid.showProfile', ['modelName'=>'user', 'model'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.showUser', ['modelName'=>'user', 'model'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'user', 'model'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php if($user->username != 'admin'): ?>
      <?php if($user->account_status): ?>
         <?php echo $__env->make('admin.actions.grid.disable', ['modelName'=>'user', 'model'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
         <?php echo $__env->make('admin.actions.grid.enable', ['modelName'=>'user', 'model'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      
      <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'user', 'model'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>

<?php endif; ?>

<?php if($user->deleted_at): ?>

   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-manage')): ?>
      <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'user', 'model'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'user', 'model'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/index/actions.blade.php ENDPATH**/ ?>