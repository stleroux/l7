<?php if(!$feature->deleted_at): ?>
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'feature', 'model'=>$feature], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'feature', 'model'=>$feature], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($feature->deleted_at): ?>
   <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'feature', 'model'=>$feature], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'feature', 'model'=>$feature], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH C:\sites\l7\resources\views/admin/features/index/actions.blade.php ENDPATH**/ ?>