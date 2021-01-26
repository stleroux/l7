<?php if($next): ?>
   <a href="<?php echo e(route('admin.carvings.show', $next)); ?>"
      class="btn btn-block btn-secondary"
      title="Next Carving">
      Next Carving
      <i class="<?php echo e(config('icons.next')); ?>"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/actions/common/next.blade.php ENDPATH**/ ?>