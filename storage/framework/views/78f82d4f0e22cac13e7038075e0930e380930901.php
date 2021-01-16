<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.features')); ?>"></i>
   <?php if(Route::currentRouteName('') == 'admin.features.new'): ?>
      Newly Reported Features
   <?php elseif(Route::currentRouteName('') == 'admin.features.underreview'): ?>
      Under Review Features
   <?php elseif(Route::currentRouteName('') == 'admin.features.pending'): ?>
      Pending Features
   <?php elseif(Route::currentRouteName('') == 'admin.features.implemented'): ?>
      Implemented Features
   <?php elseif(Route::currentRouteName('') == 'admin.features.rejected'): ?>
      Rejected Features
   <?php elseif(Route::currentRouteName('') == 'admin.features.trashed'): ?>
      Trashed Features
   <?php else: ?>
      Features
   <?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/features/index/sections/pageHeader.blade.php ENDPATH**/ ?>