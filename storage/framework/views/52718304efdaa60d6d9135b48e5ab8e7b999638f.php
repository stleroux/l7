<?php if($previous): ?>
   <a href="<?php echo e(route('admin.carvings.show', $previous)); ?>"
      class="btn btn-block btn-secondary"
      title="Previous Carving">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      Previous Carving
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/show/actions/previous.blade.php ENDPATH**/ ?>