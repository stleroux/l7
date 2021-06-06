<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.roles')); ?>"></i>
   <?php if(Route::currentRouteName('') == 'admin.roles.trashed'): ?>
      Trashed Roles
   <?php elseif(Route::currentRouteName('') == 'admin.roles.noPermissions'): ?>
      Roles without Permissions
   <?php else: ?>
      Roles
   <?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH C:\sites\l7\resources\views/admin/roles/index/sections/pageHeader.blade.php ENDPATH**/ ?>