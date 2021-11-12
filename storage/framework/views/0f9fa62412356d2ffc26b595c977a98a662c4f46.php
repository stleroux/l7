<li class="nav-item">
   <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link <?php echo e(Request::is('admin/dashboard*') ? 'active' : ''); ?>">
      <i class="<?php echo e(config('icons.dashboard')); ?>"></i>
      <p>Dashboard</p>
   </a>
</li>


   <li class="nav-item">
      <a href="<?php echo e(Route('admin.advancedSearch')); ?>" class="nav-link <?php echo e(Request::is('admin/advancedSearch*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.search')); ?>"></i>
         <p>Advanced Search</p>
      </a>
   </li>


<?php echo $__env->make('layouts.admin.sidebars.left.invoicer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.admin.sidebars.left.modules', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.admin.sidebars.left.monitoring', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('movie-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.movies.index')); ?>" class="nav-link <?php echo e(Request::is('admin/movies*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.movies')); ?>"></i>
         <p>Movies</p>
      </a>
   </li>
<?php endif; ?>

<?php echo $__env->make('layouts.admin.sidebars.left.configuration', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-maintenance')): ?>
   <li class="nav-item">
      <a href="<?php echo e(route('admin.maintenance')); ?>" class="nav-link <?php echo e(Request::is('admin/maintenance*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.maintenance')); ?>"></i>
         <p>Site Maintenance</p>
      </a>
   </li>
<?php endif; ?>

<?php echo $__env->make('layouts.admin.sidebars.left.userManagement', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>














































<?php /**PATH C:\sites\l7\resources\views/layouts/admin/sidebars/left/menu.blade.php ENDPATH**/ ?>