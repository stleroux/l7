<?php if(auth()->guard()->check()): ?>
	<li class="nav-item dropdown pb-0 mb-0">

		<a href="#" class="nav-link ml-2 dropdown-toggle" data-toggle="dropdown">
			<i class="<?php echo e(config('icons.myLinks')); ?>"></i>
			
			My Links
		</a>

		<ul class="dropdown-menu dropdown-menu-md dropdown-menu-right pb-0 mb-0">

			<?php $__currentLoopData = Auth::user()->mylinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="dropdown-item">
					<div class="text-dark">
						<a href="<?php echo e($link->page_url); ?>" class="text-dark">
							<?php echo e(ucwords($link->name)); ?>

						</a>
						<span class="float-right">
							<a href="<?php echo e($link->page_url); ?>" target="_blank" class="text-gray pr-0 mr-0">
								<i class="fas fa-external-link-alt" style="font-size: 11px;"></i>
							</a>
						</span>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<div class="dropdown-divider"></div>

			<a href="<?php echo e(route('mylinks.index')); ?>" class="dropdown-item text-primary text-center">
				Manage Links
			</a>

		</ul>

	</li>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/layouts/common/navbar/myLinks.blade.php ENDPATH**/ ?>