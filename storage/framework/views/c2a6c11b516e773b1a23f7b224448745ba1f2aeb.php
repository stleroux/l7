
   <?php if(Request::is('recipes/all')): ?>
      <a href="<?php echo e(route('recipes.printAll', 'all')); ?>"
         class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-maroon"
         title="Print All Recipes">
         <i class="<?php echo e(config('icons.print')); ?>"></i>
         <?php echo e($btn_label ?? ''); ?>

      </a>
   <?php else: ?>
      <a href="<?php echo e(route('recipes.printAll', Request::segment(3))); ?>"
         class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-maroon"
         title="Print All Recipes In Category">
         <i class="<?php echo e(config('icons.print')); ?>"></i>
         <?php echo e($btn_label ?? ''); ?>

      </a>
   <?php endif; ?>

<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/buttons/printAll.blade.php ENDPATH**/ ?>