<?php if(!$category->deleted_at): ?>
   <?php echo $__env->make('admin.categories.actions.grid.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.categories.actions.grid.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($category->deleted_at): ?>
   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category-manage')): ?>
      <?php echo $__env->make('admin.categories.actions.grid.restore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.categories.actions.grid.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>            
   <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/categories/index/actions.blade.php ENDPATH**/ ?>