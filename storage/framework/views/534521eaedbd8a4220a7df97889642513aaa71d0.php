<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.recipes')); ?>"></i>
   <?php if(Route::currentRouteName('') == 'admin.recipes.trashed'): ?>
      Trashed Recipes
   <?php elseif(Route::currentRouteName('') == 'admin.recipes.future'): ?>
   	Future Recipes
   <?php elseif(Route::currentRouteName('') == 'admin.recipes.newRecipes'): ?>
   	New Recipes
   <?php elseif(Route::currentRouteName('') == 'admin.recipes.unpublished'): ?>
   	Unpublished Recipces
   <?php elseif(Route::currentRouteName('') == 'admin.recipes.published'): ?>
   	Published Recipes
   <?php else: ?>
      Recipes
   <?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/index/sections/pageHeader.blade.php ENDPATH**/ ?>