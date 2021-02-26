<?php if(!$role->deleted_at): ?>

   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'role', 'model'=>$role], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.addAllPerms', ['modelName'=>'role', 'model'=>$role], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php if($role->name != 'admin'): ?>
      <?php echo $__env->make('admin.actions.grid.removeAllPerms', ['modelName'=>'role', 'model'=>$role], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'role', 'model'=>$role], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>

<?php endif; ?>

<?php if($role->deleted_at): ?>

   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-manage')): ?>
      <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'role', 'model'=>$role], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'role', 'model'=>$role], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/roles/index/actions.blade.php ENDPATH**/ ?>