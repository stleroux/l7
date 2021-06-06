<div class="card mb-2 card-primary">
	<div class="card-header p-2">
      
		   <i class="far fa-image"></i>
		   Carving Image(s)
      
	</div>

	<div class="card-body p-0 m-0 w-75 mx-auto">
		<?php if($carving->images->count() >= 1): ?>
			<div id="carvingsImageSlider" class="carousel slide mb-0" data-ride="carousel">

				<ol class="carousel-indicators">
					<?php $__currentLoopData = $carving->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li data-target="#carvingsImageSlider" data-slide-to="<?php echo e($image->id); ?>" class="<?php echo e(($loop->first) ? 'active' : ''); ?>"></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ol>

				<div class="carousel-inner">
					<?php $__currentLoopData = $carving->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="carousel-item <?php echo e(($loop->first) ? 'active' : ''); ?> text-center p-2">
						
	               <?php if(auth::check()): ?>
							<a href="" data-toggle="modal" data-target="#imageModal<?php echo e($image->id); ?>_XL" class="">
		                  <img class="w-100" src="/_carvings/<?php echo e($carving->id); ?>/thumbs/<?php echo e($image->name); ?>" alt="<?php echo e($image->name); ?>">
	   	            </a>

	               <?php else: ?>
	                  <img class="w-100" src="/_carvings/<?php echo e($carving->id); ?>/thumbs/<?php echo e($image->name); ?>" alt="<?php echo e($image->name); ?>">
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
											<img src="<?php echo e("/_carvings/" . $carving->id . "/" . $image->name); ?>" height="100%" width="100%" alt="">
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

				<?php if($carving->images->count() > 1): ?>
					<a class="carousel-control-prev" href="#carvingsImageSlider" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>

					<a class="carousel-control-next" href="#carvingsImageSlider" role="button" data-slide="next">
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
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/blocks/imageSlider.blade.php ENDPATH**/ ?>