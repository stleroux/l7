<div class="card card-trans-4 card-outline card-primary text-dark mb-2">
	<div class="card-header bg-info p-1">
      <div class="card-title">
		   <i class="<?php echo e(config('icons.image')); ?>"></i>
		   Project Image(s)
      </div>
	</div>

	<div class="card-body p-1 m-0 w-50 mx-auto">
		<?php if($project->images->count() >= 1): ?>
			<div id="projectsImageSlider" class="carousel slide mb-0" data-ride="carousel">

				<ol class="carousel-indicators">
					<?php $__currentLoopData = $project->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li data-target="#projectsImageSlider" data-slide-to="<?php echo e($image->id); ?>" class="<?php echo e(($loop->first) ? 'active' : ''); ?>"></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ol>

				<div class="carousel-inner">
					<?php $__currentLoopData = $project->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="carousel-item <?php echo e(($loop->first) ? 'active' : ''); ?> text-center py-2">
						
	               <?php if(auth::check()): ?>
							<a href="" data-toggle="modal" data-target="#imageModal<?php echo e($image->id); ?>_XL" class="">
		                  <img class="w-100" src="/_projects/<?php echo e($project->id); ?>/thumbs/<?php echo e($image->name); ?>" alt="<?php echo e($image->name); ?>">
	   	            </a>
	      	         
	               <?php else: ?>
	                  <img class="w-100" src="/_projects/<?php echo e($project->id); ?>/thumbs/<?php echo e($image->name); ?>" alt="<?php echo e($image->name); ?>">
	               <?php endif; ?>

						<div class="modal bg-secondary" id="imageModal<?php echo e($image->id); ?>_XL" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel">
							<div class="modal-dialog  modal-dialog-full" role="document">
								<div class="modal-content modal-content-full">
									<div class="modal-header bg-primary">
										<h4 class="modal-title" id="imageModalLabel"><?php echo e($image->name); ?></h4>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span>&times;</span>
										</button>
									</div>
									<div class="modal-body text-dark">
										<p>
											<img src="<?php echo e("/_projects/" . $project->id . "/" . $image->name); ?>" height="100%" width="100%" alt="">
										</p>
										<p><?php echo e($image->description); ?></p>
								 	</div>
								 	<div class="modal-footer">
										<button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

				<?php if($project->images->count() > 1): ?>
					<a class="carousel-control-prev" href="#projectsImageSlider" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>

					<a class="carousel-control-next" href="#projectsImageSlider" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				<?php endif; ?>
			</div>
		<?php else: ?>
			<img src="/images/no_image.jpg" alt="No Image" height="100%" width="100%">
		<?php endif; ?>
	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/projects/blocks/imageSlider.blade.php ENDPATH**/ ?>