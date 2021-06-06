<li class="nav-item dropdown pb-0 mb-0">

	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
		My Links
	</a>

	<ul class="dropdown-menu dropdown-menu-md dropdown-menu-right pb-0 mb-0">

		<?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="<?php echo e($link->url); ?>" class="dropdown-item">
				<?php echo e(ucwords($link->name)); ?>

			</a>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<div class="dropdown-divider"></div>

		<a href="<?php echo e(route('links.index')); ?>" class="dropdown-item text-primary">
			Manage Links
		</a>

	</ul>

</li>
<?php /**PATH C:\sites\l7\resources\views/layouts/common/navbar/links.blade.php ENDPATH**/ ?>