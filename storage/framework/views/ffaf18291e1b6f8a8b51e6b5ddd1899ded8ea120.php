<!-- RECIPES -->

<div class="col">
   <a href="<?php echo e(route('admin.recipes.index')); ?>">
      <div class="info-box">
         <span class="info-box-icon bg-info elevation-1">
            <i class="<?php echo e(config('icons.recipes')); ?>"></i>
         </span>

         <div class="info-box-content">
            <span class="info-box-text h4">Recipes</span>
            <?php if(Auth::user()->can('recipe-list')): ?>
               <span class="info-box-text">
                  Published : <?php echo e($userRecipesPublishedCount); ?>

                  <br />
                  Unpublished : <?php echo e($userRecipesUnpublishedCount); ?>

                  <br />
                  Future : <?php echo e($userRecipesFutureCount); ?>

                  <br />
                  Trashed : <?php echo e($userRecipesTrashedCount); ?>

                  <br />
                  <span class="info-box-number">
                     Total : <?php echo e($userRecipesTotalCount); ?>

                     <br />
                     Overall Total : <?php echo e($recipesCount); ?>                     
                  </span>
               </span>
            <?php else: ?>
               <span class="info-box-number">
                  Total : <?php echo e($recipesCount); ?>

               </span>
            <?php endif; ?>

         </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
   </a>
</div><!-- /.col --><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/dashboard/infoBoxes/recipes.blade.php ENDPATH**/ ?>