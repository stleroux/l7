<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.carvings')); ?>"></i>
   <?php if(Route::currentRouteName() == 'admin.carvings.trashed'): ?>
      Trashed Carvings
   <?php else: ?>
   	<?php if(request('tag')): ?>
   		<?php echo e(request('tag')); ?>

   	<?php endif; ?>
      Carvings
   <?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/index/sections/pageHeader.blade.php ENDPATH**/ ?>