<?php if(Session::get('fromPage')): ?>
   <a href="<?php echo e(Session::get('fromPage')); ?>"
      class="btn btn-block btn-default d-print-none"
      title="Back">
      <i class="<?php echo e(config('icons.back')); ?>"></i>
      Back
   </a>
<?php else: ?>
   <a href="\"
      class="btn btn-block btn-default d-print-none"
      title="Back">
      <i class="<?php echo e(config('icons.back')); ?>"></i>
      Back
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/show/actions/back.blade.php ENDPATH**/ ?>