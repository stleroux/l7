<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.posts')); ?>"></i>
   <?php if(Route::currentRouteName('') == 'admin.posts.trashed'): ?>
      Trashed Posts
   <?php elseif(Route::currentRouteName('') == 'admin.posts.future'): ?>
   	Future Posts
   <?php elseif(Route::currentRouteName('') == 'admin.posts.new'): ?>
   	New Posts
   <?php elseif(Route::currentRouteName('') == 'admin.posts.unpublished'): ?>
   	Unpublished Posts
   <?php elseif(Route::currentRouteName('') == 'admin.posts.index'): ?>
   	Published Posts
   <?php else: ?>
      Published Posts ...
   <?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/index/sections/pageHeader.blade.php ENDPATH**/ ?>