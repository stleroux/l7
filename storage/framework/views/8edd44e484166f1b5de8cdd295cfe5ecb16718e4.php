<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="<?php echo e(route('admin.recipes.index')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.recipes.index') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.recipes')); ?>"></i>
         Published Recipes 
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Recipe::published()->count()); ?>

         </div>
      </a>

      <a href="<?php echo e(route('admin.recipes.unpublished')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.recipes.unpublished') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.recipes')); ?>"></i>
         Unpublished Recipes
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Recipe::unpublished()->count()); ?>

         </div>
      </a>
   
      <a href="<?php echo e(route('admin.recipes.newRecipes')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.recipes.newRecipes') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.recipes')); ?>"></i>
         New Recipes
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Recipe::newRecipes()->count()); ?>

         </div>
      </a>
   
      <a href="<?php echo e(route('admin.recipes.future')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.recipes.future') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.recipes')); ?>"></i>
         Future Recipes
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Recipe::future()->count()); ?>

         </div>
      </a>
   
      <a href="<?php echo e(route('admin.recipes.trashed')); ?>"
         class="btn btn-block btn-default text-left <?php echo e(request()->routeIs('admin.recipes.trashed') ? 'buttonActive' : ''); ?>">
         <i class="<?php echo e(config('icons.trashed')); ?> text-pink"></i>
         Trashed Recipes
         <div class="badge badge-dark badge-pill float-right mt-1">
            <?php echo e(App\Models\Recipe::trashedCount()->count()); ?>

         </div>
      </a>
      
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/recipes/index/blocks/pages.blade.php ENDPATH**/ ?>