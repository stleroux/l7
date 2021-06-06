<?php if($previous): ?>
   <a href="<?php echo e(route('admin.movies.show', [$previous])); ?>"
      class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-primary text-light"
      title="Previous Movie">
      <i class="<?php echo e(config('buttons.previous')); ?>"></i>
      View Previous      
   </a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/movies/buttons/previous.blade.php ENDPATH**/ ?>