<?php if($next): ?>
   <a href="<?php echo e(route('recipes.show', $next)); ?>"
      class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-maroon text-light col-2 col-xl-4"
      title="Next Recipe">
      
      <div class="d-none d-lg-inline col-xl-4">
      	<?php echo e($btn_label ?? ''); ?>

      </div>
      <i class="<?php echo e(config('icons.next')); ?>"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/buttons/nextAll.blade.php ENDPATH**/ ?>