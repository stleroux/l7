<?php if($next): ?>
   <a href="<?php echo e(route('admin.movies.show', $next)); ?>"
      class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-primary text-light"
      title="Next Movie">
      View Next
      <i class="<?php echo e(config('buttons.next')); ?>"></i>
   </a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/movies/buttons/next.blade.php ENDPATH**/ ?>