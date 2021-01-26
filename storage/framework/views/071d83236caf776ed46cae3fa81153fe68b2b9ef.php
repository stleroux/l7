<?php if($next): ?>
   <a href="<?php echo e(route('admin.posts.show', $next)); ?>"
      class="btn btn-block btn-outline-secondary"
      title="Next Post">
      Next Post
      <i class="<?php echo e(config('icons.next')); ?>"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/actions/common/next.blade.php ENDPATH**/ ?>