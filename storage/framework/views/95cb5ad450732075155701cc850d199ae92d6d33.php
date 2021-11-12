<?php if(!$offering->deleted_at): ?>
   
   
  
   
   <?php if($offering->id > 1): ?>
      <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'offering', 'model'=>$offering], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>
   
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'offering', 'model'=>$offering], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($offering->deleted_at): ?>
   <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'offering', 'model'=>$offering], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'offering', 'model'=>$offering], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/offerings/index/actions.blade.php ENDPATH**/ ?>