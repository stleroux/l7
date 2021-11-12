<?php if(!$material->deleted_at): ?>

   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'material', 'model'=>$material], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'material', 'model'=>$material], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>

<?php if($material->deleted_at): ?>

   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('material-manage')): ?>
      <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'material', 'model'=>$material], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'material', 'model'=>$material], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/materials/index/actions.blade.php ENDPATH**/ ?>