<ul class="navbar-nav ml-auto">

   <?php if(auth()->guard()->guest()): ?>

      <?php echo $__env->make('layouts.UI.navbar.right.authLinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php else: ?>

	   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-dashboard')): ?>
	   	<li class="nav-item <?php echo e(Route::is('admin.dashboard*') ? 'active' : ''); ?>">
		      <a class="nav-link p-2" href="<?php echo e(route('admin.dashboard')); ?>">
		         <i class="<?php echo e(config('icons.dashboard')); ?>"></i>
		         Dashboard
		      </a>
	   	</li>
	   <?php endif; ?>

      
      <?php echo $__env->make('layouts.common.navbar.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php endif; ?>

</ul>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/UI/navbar/right/navbarRight.blade.php ENDPATH**/ ?>