<?php $__env->startSection('pageHeader'); ?>

   <i class="<?php echo e(config('icons.faq')); ?>"></i>

   <?php if(Route::currentRouteName() == 'admin.faqs.trashed'): ?>
      Trashed Faqs
   <?php else: ?>
      Faqs
   <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/index/sections/pageHeader.blade.php ENDPATH**/ ?>