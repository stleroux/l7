<?php if($previous): ?>
   <a href="<?php echo e(route('admin.faqs.show', $previous)); ?>"
      class="btn btn-block btn-outline-secondary"
      title="Previous Question">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      Previous Question
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/actions/common/previous.blade.php ENDPATH**/ ?>