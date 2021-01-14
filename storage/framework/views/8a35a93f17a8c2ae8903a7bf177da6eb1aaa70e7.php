

   <?php if(!$recipe->isFavorited()): ?>
      <a href="<?php echo e(route('recipes.favoriteAdd', $recipe->id)); ?>"
         class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-maroon"
         title="Add Favorite">
         <i class="<?php echo e(config('icons.favorite')); ?> text-success"></i>
         <div class="d-none d-lg-inline">
            Add <?php echo e($btn_label ?? ''); ?>

         </div>
      </a>
   <?php else: ?>
      <a href="<?php echo e(route('recipes.favoriteRemove', $recipe->id)); ?>"
         class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-maroon"
         title="Remove Favorite">
         <i class="<?php echo e(config('icons.favorite')); ?> text-danger"></i>
         <div class="d-none d-lg-inline">
            Remove <?php echo e($btn_label ?? ''); ?>

         </div>
      </a>
   <?php endif; ?>

<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/buttons/favorite.blade.php ENDPATH**/ ?>