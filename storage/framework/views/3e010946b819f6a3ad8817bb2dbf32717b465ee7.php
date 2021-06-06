<?php $__env->startSection('pageHeader'); ?>
   
   <i class="<?php echo e(config('icons.bell')); ?>"></i>

   <?php if(Route::currentRouteName() == 'admin.notifications.all'): ?>
   	All
   <?php elseif(Route::currentRouteName() == 'admin.notifications.unread'): ?>
   	Unread
   <?php elseif(Route::currentRouteName() == 'admin.notifications.read'): ?>
   	Read
   <?php endif; ?>

   Notifications

<?php $__env->stopSection(); ?><?php /**PATH C:\sites\l7\resources\views/admin/notifications/index/sections/pageHeader.blade.php ENDPATH**/ ?>