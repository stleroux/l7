<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.posts')); ?>"></i>
   <?php if(Route::currentRouteName('') == 'admin.posts.trashed'): ?>
      Trashed Posts
   <?php else: ?>
      View Post
   <?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH C:\sites\l7\resources\views/admin/posts/show/sections/pageHeader.blade.php ENDPATH**/ ?>