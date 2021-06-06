<?php $__env->startSection('blocks'); ?>

   <?php echo $__env->make('admin.carvings.index.blocks.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
   <?php if(Route::currentRouteName() == 'admin.carvings.index'): ?>
   	<?php echo $__env->make('admin.carvings.blocks.tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>
   
   <?php echo $__env->make('admin.carvings.index.blocks.pages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.carvings.index.blocks.tools', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/index/sections/blocks.blade.php ENDPATH**/ ?>