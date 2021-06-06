<?php if(!$category->deleted_at): ?>
   
   
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'category', 'model'=>$category], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'category', 'model'=>$category], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($category->deleted_at): ?>
   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category-manage')): ?>
      
      
      <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'category', 'model'=>$category], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'category', 'model'=>$category], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/categories/index/actions.blade.php ENDPATH**/ ?>