<?php if($next): ?>
   <a href="<?php echo e(route('admin.projects.show', $next)); ?>"
      class="btn btn-block btn-outline-secondary"
      title="Next Project">
      Next Project
      <i class="<?php echo e(config('icons.next')); ?>"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/actions/common/next.blade.php ENDPATH**/ ?>