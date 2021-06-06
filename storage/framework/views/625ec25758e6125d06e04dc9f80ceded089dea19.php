<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.categories')); ?>"></i>
   <?php if(Route::currentRouteName() == 'admin.categories.index'): ?>
      Categories
   <?php else: ?>
      Trashed Categories
   <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\sites\l7\resources\views/admin/categories/index/sections/pageHeader.blade.php ENDPATH**/ ?>