<!-- RECIPES -->

<?php if(Auth::user()->can('recipe-manage') || Auth::user()->hasRole('admin')): ?>
   <div class="col col-md-6 col-xl-12">
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
   </div><!-- /.col -->
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/infoBoxes/recipes.blade.php ENDPATH**/ ?>