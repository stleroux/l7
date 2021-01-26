<div class="card card-primary">
   
   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">

   	<?php if(Route::currentRouteName() == 'admin.categories.index'): ?>
         <?php echo $__env->make('admin.categories.actions.mass.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
         
      <?php if(Route::currentRouteName() == 'admin.categories.trashed'): ?>
         <?php echo $__env->make('admin.categories.actions.mass.restore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.categories.actions.mass.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/categories/index/blocks/actions.blade.php ENDPATH**/ ?>