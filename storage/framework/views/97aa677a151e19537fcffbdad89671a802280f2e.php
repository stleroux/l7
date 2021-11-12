<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.users')); ?>"></i>
   <?php if(Route::currentRouteName('') == 'admin.users.trashed'): ?>
      Trashed Users
   <?php elseif(Route::currentRouteName('') == 'admin.users.noRoles'): ?>
      Users Without Roles
   <?php elseif(Route::currentRouteName('') == 'admin.users.approved'): ?>
      Approved Users
   <?php elseif(Route::currentRouteName('') == 'admin.users.disabled'): ?>
      Disabled Users
   <?php else: ?>
      Users
   <?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH C:\sites\l7\resources\views/admin/users/index/sections/pageHeader.blade.php ENDPATH**/ ?>