<?php if($next): ?>
   <a href="<?php echo e(route('admin.'.$modelName.'s.show', $next)); ?>"
      class="btn btn-block btn-secondary"
      title="Next <?php echo e(ucfirst($modelName)); ?>">
      Next <?php echo e(ucfirst($modelName)); ?>

      <i class="<?php echo e(config('icons.next')); ?>"></i>
   </a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/common/next.blade.php ENDPATH**/ ?>