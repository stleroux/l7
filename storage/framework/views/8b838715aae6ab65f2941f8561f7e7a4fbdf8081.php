<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('css/UI/recipes.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	<i class="<?php echo e(config('icons.recipes')); ?>"></i>
	Recipes
	<?php if($byCatName): ?>
		:: <?php echo e(deliciousCamelcase(ucwords($byCatName->name))); ?>

	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<li class="breadcrumb-item">Recipes</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
	<?php echo $__env->make('UI.recipes.blocks.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->make('UI.recipes.blocks.popular', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->make('UI.recipes.blocks.archives', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
	<?php echo $__env->make('UI.recipes.index.grid.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php if($recipes->count() > 0): ?>

		<div class="card card-trans-2 mb-3">

			<div class="card-body section_body p-1">
				<div class="my-1">
					<?php echo $__env->make('UI.recipes.index.grid.alphabet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
				
				<div class="row justify-content-center">
					<?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						
						<div id="card-hover" class="border-2 card card-trans-2 col-7 col-sm-6 col-md-4 col-lg-3 col-xl-2 m-xl-1 pt-2 pb-2 px-1">

							
                           
                        <?php if($recipe->published_at > \Carbon\Carbon::now()->subMonth()): ?>
                           <div class="ribbon-wrapper">
                              
                              <div class="ribbon bg-lime m-0">New</div>
                           </div>
                        <?php endif; ?>

								<?php if($recipe->image): ?>
									<a href="<?php echo e(route('recipes.show', [$recipe->id, $byCatName])); ?>" class="" style="text-decoration: none;">
										<img class="card-img-top col-10 offset-1 col-sm-12 offset-sm-0" src="\_recipes\<?php echo e($recipe->image); ?>" height="120px" width="auto">
									</a>
								<?php else: ?>
									<a href="<?php echo e(route('recipes.show', [$recipe->id, $byCatName])); ?>" class="" style="text-decoration: none">
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
											<div class="col">
												<?php echo $__env->make('UI.recipes.index.grid.buttons.favorite', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>											
												<?php if(auth::user()->hasRole('admin')): ?>
													<a href="<?php echo e(route('admin.recipes.edit', $recipe)); ?>" class="btn btn-sm btn-maroon text-light">
														<i class="<?php echo e(config('icons.edit')); ?>"></i>
													</a>
												<?php endif; ?>
											</div>
										</div>
									</div>
								<?php endif; ?>

								<div class="card-footer px-1 py-0 mb-0">
									<div class="text-center">
										By <?php echo e($recipe->user->username); ?>

									</div>
								</div>

							

						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

				
				<div class="row">
					<div class="col ml-2 text-light">
						Showing <?php echo e($recipes->firstItem()); ?> to <?php echo e($recipes->lastItem()); ?> of <?php echo e($recipes->total()); ?> entries
					</div>
					<div class="col text-right p-0 m-0">
						<?php echo e($recipes->links('UI.recipes.pagination.custom')); ?>

					</div>
				</div>

			</div>
		</div>

	<?php else: ?>
			
		<div class="col-row p-3 card-trans-4 text-light">
			<?php echo e(config('settings.noRecordsFound')); ?>

		</div>

	<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/recipes/index/grid/index.blade.php ENDPATH**/ ?>