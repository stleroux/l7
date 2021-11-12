<?php $__env->startSection('pageHeader'); ?>

   <i class="<?php echo e(config('icons.carvings')); ?>"></i>

   <?php if(Route::currentRouteName() == 'admin.offerings.trashed'): ?>
      Trashed Offerings
   <?php else: ?>
      Offerings
   <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php /**PATH C:\sites\l7\resources\views/admin/offerings/index/sections/pageHeader.blade.php ENDPATH**/ ?>