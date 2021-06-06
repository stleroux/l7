<a href="<?php echo e(route('recipes.myRecipesGrid', 'all')); ?>"
   class="btn <?php echo e($size ? 'btn-'.$size : ''); ?> btn-maroon"
   title="My Recipes">
   <i class="<?php echo e(config('icons.mine')); ?>"></i>
   <?php echo e($btn_label ?? ''); ?>

</a><?php /**PATH C:\sites\l7\resources\views/UI/recipes/myRecipes/grid/buttons/grid.blade.php ENDPATH**/ ?>