<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.bugs')); ?>"></i>
   <?php if(Route::currentRouteName('') == 'admin.bugs.new'): ?>
      Newly Reported Bugs
   <?php elseif(Route::currentRouteName('') == 'admin.bugs.pending'): ?>
      Pending Bugs
   <?php elseif(Route::currentRouteName('') == 'admin.bugs.notreproducible'): ?>
      Not Reproducible
   <?php elseif(Route::currentRouteName('') == 'admin.bugs.nonissue'): ?>
      Non Issue
   <?php elseif(Route::currentRouteName('') == 'admin.bugs.resolved'): ?>
      Resolved
   <?php elseif(Route::currentRouteName('') == 'admin.bugs.trashed'): ?>
      Trashed Bugs
   <?php else: ?>
      Bugs
   <?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH C:\sites\l7\resources\views/admin/bugs/index/sections/pageHeader.blade.php ENDPATH**/ ?>