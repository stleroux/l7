<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.projects')); ?>"></i>
   <?php if(Route::currentRouteName() == 'admin.projects.trashed'): ?>
      Trashed Projects
   <?php else: ?>
      Projects
   <?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/index/sections/pageHeader.blade.php ENDPATH**/ ?>