<?php if(!$carving->deleted_at): ?>
   <?php echo $__env->make('admin.actions.grid.showJobSheet', ['modelName'=>'carving', 'model'=>$carving], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'carving', 'model'=>$carving], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.resetViews', ['modelName'=>'carving', 'model'=>$carving], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'carving', 'model'=>$carving], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($carving->deleted_at): ?>
   <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'carving', 'model'=>$carving], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'carving', 'model'=>$carving], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/index/actions.blade.php ENDPATH**/ ?>