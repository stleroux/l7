<?php if($next): ?>
   <a href="<?php echo e(route('blog.show', $next)); ?>"
      class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-primary text-light col-2"
      title="Next Blog">
      
      <?php echo e($btn_label ?? 'Next '); ?>

      <i class="<?php echo e(config('icons.next')); ?>"></i>
   </a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/blog/buttons/next.blade.php ENDPATH**/ ?>