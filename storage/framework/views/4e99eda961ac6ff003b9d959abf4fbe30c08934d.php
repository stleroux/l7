<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      
      <?php echo $__env->make('admin.faqs.actions.common.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      

      <?php if(Route::currentRouteName() == 'admin.faqs.index'): ?>
         
         <?php echo $__env->make('admin.faqs.actions.mass.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>

      <?php if(Route::currentRouteName() == 'admin.faqs.trashed'): ?>
         <?php echo $__env->make('admin.faqs.actions.mass.restore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.faqs.actions.mass.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/index/blocks/actions.blade.php ENDPATH**/ ?>