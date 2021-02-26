<?php if(!$finish->deleted_at): ?>
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'finish', 'model'=>$finish], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'finish', 'model'=>$finish], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($finish->deleted_at): ?>
   <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'finish', 'model'=>$finish], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'finish', 'model'=>$finish], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/finishes/index/actions.blade.php ENDPATH**/ ?>