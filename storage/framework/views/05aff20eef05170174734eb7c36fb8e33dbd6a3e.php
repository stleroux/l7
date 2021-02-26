<?php if(auth()->guard()->check()): ?>

   <div class="card card-trans-4 mb-2" style="background-color: #800000">

      <div class="card-header text-light p-2">
         <i class="<?php echo e(config('icons.recipes')); ?>"></i>
         Recipes
      </div>

      <div class="card-body card-trans-6 p-0 m-0">
         
         <ul class="list-group">
            
            <a href="<?php echo e(route('recipes.myRecipesGrid', 'all')); ?>"
               class="card-trans-2 list-group-item list-group-item-action p-1
                     <?php echo e((route('recipes.myRecipesGrid', 'all') === url()->current()) || (route('recipes.myRecipesList', 'all') === url()->current()) ? 'recipeActive' : ''); ?>

            ">
               <i class="<?php echo e(config('icons.mine')); ?>"></i>
               My Recipes
            </a>

<?php if($privateRecipesCount > 0): ?>
            <a href="<?php echo e(route('recipes.privateRecipesGrid', 'all')); ?>"
               class="card-trans-2 list-group-item list-group-item-action p-1
                     <?php echo e((route('recipes.privateRecipesGrid', 'all') === url()->current()) || (route('recipes.privateRecipesList', 'all') === url()->current()) ? 'recipeActive' : ''); ?>

            ">
               <i class="<?php echo e(config('icons.private')); ?>"></i>
               My Private Recipes
            </a>
<?php endif; ?>

            <a href="<?php echo e(route('recipes.favoriteRecipesGrid', 'all')); ?>"
               class="card-trans-2 list-group-item list-group-item-action p-1
                     <?php echo e((route('recipes.favoriteRecipesGrid', 'all') === url()->current()) || (route('recipes.favoriteRecipesList', 'all') === url()->current()) ? 'recipeActive' : ''); ?>

            ">
               <i class="<?php echo e(config('icons.favorite')); ?>"></i>
               My Favorite Recipes
            </a>

         </ul>

      </div>



      

         



         

         

      
   </div>

<?php endif; ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/blocks/sidebar.blade.php ENDPATH**/ ?>