<div class="row pb-2">
   <div class="col">
      <span class="float-right">
      	<div class="btn-group">
				<?php echo $__env->make('UI.recipes.myRecipes.grid.buttons.grid', ['size'=>'sm', 'btn_label'=>'My Recipes'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('UI.recipes.myRecipes.grid.buttons.ddGrid', ['size'=>'sm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('UI.recipes.buttons.printAll', ['size'=>'sm', 'btn_label'=>'Print All'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				
			</div>
         <div class="btn-group">
            <a href="<?php echo e(route('recipes.myRecipesGrid', 'all')); ?>" class="btn btn-sm btn-light">
               <i class="<?php echo e(config('icons.grid')); ?>"></i>
               Grid
            </a>
            <a href="<?php echo e(route('recipes.myRecipesList', 'all')); ?>" class="btn btn-sm btn-maroon">
               <i class="<?php echo e(config('icons.list')); ?>"></i>
               List
            </a>
         </div>
      </span>
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/recipes/myRecipes/grid/topbar.blade.php ENDPATH**/ ?>