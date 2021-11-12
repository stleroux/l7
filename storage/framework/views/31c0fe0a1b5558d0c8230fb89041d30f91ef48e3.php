

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/recipes.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.favorite')); ?>"></i>
   My Favorite Recipes

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('recipes.indexGrid', 'all')); ?>">Recipes</a></li>
   <li class="breadcrumb-item">My Favorite Recipes</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   <?php echo $__env->make('UI.recipes.blocks.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.recipes.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('UI.recipes.blocks.archives', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
   <?php echo $__env->make('UI.recipes.favoriteRecipes.grid.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php if($recipes->count() > 0): ?>
	   <div class="card mb-3 card-trans-2">
			<div class="card-body section_body p-1">
				<div class="my-1">
					
				</div>
					
				<div class="row justify-content-center">
					<?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div id="card-hover" class="border-2 card card-trans-2 col-7 col-sm-6 col-md-4 col-lg-3 col-xl-2 m-xl-1 pt-2 pb-2 px-1">

							<?php if($recipe->image): ?>
								<a href="<?php echo e(route('recipes.show', $recipe->id)); ?>" class="" style="text-decoration: none;">
									<img class="card-img-top col-10 offset-1 col-sm-12 offset-sm-0" src="\_recipes\<?php echo e($recipe->image); ?>" height="120px" width="auto">
								</a>
							<?php else: ?>
								<a href="<?php echo e(route('recipes.show', $recipe->id)); ?>" class="" style="text-decoration: none">
									<img class="card-img-top col-10 offset-1 col-sm-12 offset-sm-0" src="\_recipes\image_not_available.jpg" height="120px" width="auto">
								</a>
							<?php endif; ?>

							<div class="card-body pt-1 pb-0">
								<div class="row justify-content-center text-center">
									<span class="card-title pb-2 m-0 font-weight-bold">
										<?php echo e(ucwords($recipe->title)); ?>

									</span>
								</div>
							</div>

							<div class="card-text p-0 m-0 text-center">
								<div class="align-self-end">
									<p>
										<span class="badge badge-light text-dark" title="Times Viewed"><?php echo e($recipe->views); ?> Views</span>
										<span class="badge badge-light text-dark" title="Comments"><?php echo e($recipe->comments->count()); ?> Comments</span>
										<br />
										<span class="badge badge-light text-dark" title="Times Favorited">
	                              <?php echo e($recipe->favoritesCount); ?> Favorited
	                           </span>
									</p>
								</div>	
							</div>

							<?php if(auth()->guard()->check()): ?>
								<div class="card-text pb-1 m-0">
									<div class="align-self-end text-center">
										
											<?php echo $__env->make('UI.recipes.favoriteRecipes.grid.buttons.removeFavorite', ['size'=>'xs', 'btn_label'=>'Remove'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
										
											
										
									</div>
								</div>
							<?php endif; ?>

							<div class="card-footer px-1 py-0 text-center">
								<small class="">
									By
									<?php if($recipe->user->first_name && $recipe->user->last_name): ?>
										<?php echo e(ucwords($recipe->user->first_name)); ?> <?php echo e(ucwords($recipe->user->last_name)); ?>

									<?php else: ?>
										<?php echo e($recipe->user->email); ?>

									<?php endif; ?>
								</small>
							</div>

						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

				


			</div>
		</div>

	<?php else: ?>

		<div class="col-row p-3 card-trans-4 text-light">
         <?php echo e(config('settings.noRecordsFound')); ?>

      </div>

   <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/recipes/favoriteRecipes/grid/index.blade.php ENDPATH**/ ?>