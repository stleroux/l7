<?php if($next): ?>
   <a href="<?php echo e(route('admin.faqs.show', $next)); ?>"
      class="btn btn-block btn-outline-secondary"
      title="Next Question">
      Next Question
      <i class="<?php echo e(config('icons.next')); ?>"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/actions/common/next.blade.php ENDPATH**/ ?>