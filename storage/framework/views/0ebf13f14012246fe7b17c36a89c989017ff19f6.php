<?php if($previous): ?>
   <a href="<?php echo e(route('admin.'.$modelName.'s.show', $previous)); ?>"
      class="btn btn-block btn-secondary"
      title="Previous <?php echo e(ucfirst($modelName)); ?>">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      Previous <?php echo e(ucfirst($modelName)); ?>

   </a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/common/previous.blade.php ENDPATH**/ ?>