<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.permissions')); ?>"></i>
   <?php if(Route::currentRouteName() == 'admin.permissions.index'): ?>
      Permissions
   <?php else: ?>
      Trashed Permissions
   <?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/permissions/index/sections/pageHeader.blade.php ENDPATH**/ ?>