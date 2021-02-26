<div class="row pb-2">

	<div class="col">

		<span class="float-right">

			<div class="btn-group">
				<?php echo $__env->make('UI.recipes.index.grid.buttons.grid', ['size'=>'sm', 'btn_label'=>'All Recipes'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo $__env->make('UI.recipes.index.grid.buttons.ddGrid', ['size'=>'sm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php if(auth()->guard()->check()): ?>
				  <?php echo $__env->make('UI.recipes.buttons.printAll', ['size'=>'sm', 'btn_label'=>'Print All'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
			</div>

         <div class="btn-group">
            <a href="<?php echo e(route('recipes.indexGrid', 'all')); ?>" class="btn btn-sm btn-light">
               <i class="<?php echo e(config('icons.grid')); ?>"></i>
               Grid
            </a>
            <a href="<?php echo e(route('recipes.indexList', 'all')); ?>" class="btn btn-sm btn-maroon">
               <i class="<?php echo e(config('icons.list')); ?>"></i>
               List
            </a>
         </div>

      </span>

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/index/grid/topbar.blade.php ENDPATH**/ ?>