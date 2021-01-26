<?php if($previous): ?>
   <a href="<?php echo e(route('blog.show', $previous)); ?>"
      class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-primary text-light col-2"
      title="Previous Blog">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      
      <?php echo e($btn_label ?? 'Previous'); ?>

   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/blog/buttons/previous.blade.php ENDPATH**/ ?>