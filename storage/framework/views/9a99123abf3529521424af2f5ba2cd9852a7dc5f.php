<?php if($previous): ?>
   <a href="<?php echo e(route('admin.projects.show', $previous)); ?>"
      class="btn btn-block btn-outline-secondary"
      title="Previous Project">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      Previous Project
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/actions/common/previous.blade.php ENDPATH**/ ?>