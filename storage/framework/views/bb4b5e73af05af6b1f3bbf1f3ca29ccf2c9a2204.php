<?php if($previous): ?>
   <a href="<?php echo e(route('admin.posts.show', $previous)); ?>"
      class="btn btn-block btn-outline-secondary"
      title="Previous Post">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      Previous Post
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/actions/common/previous.blade.php ENDPATH**/ ?>