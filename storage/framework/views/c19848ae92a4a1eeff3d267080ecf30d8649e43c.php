<ul class="navbar-nav mr-auto">

<?php if(Config::get('settings.recipes') == 'visible'): ?>
   <li class="nav-item <?php echo e(Route::is('recipes*') ? 'bg-black border-red-2' : ''); ?>">
      <a class="nav-link" href="<?php echo e(route('recipes.indexGrid', 'all')); ?>">
      	<i class="<?php echo e(config('icons.recipes')); ?>"></i>
      	<?php echo e(__('Recipes')); ?>

      </a>
   </li>
<?php endif; ?>

<?php if(Config::get('settings.projects') == 'visible'): ?>
   <li class="nav-item <?php echo e(Route::is('projects*') ? 'bg-black border-red-2' : ''); ?>">
      <a class="nav-link" href="<?php echo e(route('projects.index')); ?>">
      	<i class="<?php echo e(config('icons.projects')); ?>"></i>
      	<?php echo e(__('Projects')); ?>

      </a>
   </li>
<?php endif; ?>

<?php if(Config::get('settings.carvings') == 'visible'): ?>
   <li class="nav-item <?php echo e(Route::is('carvings*') ? 'bg-black border-red-2' : ''); ?>">
      <a class="nav-link" href="<?php echo e(route('carvings.index')); ?>">
         <i class="<?php echo e(config('icons.carvings')); ?> mr-1"></i>
         <?php echo e(__('Carvings')); ?>

      </a>
   </li>
<?php endif; ?>

<?php if(Config::get('settings.blog') == 'visible'): ?>
   <li class="nav-item <?php echo e(Route::is('blog*') ? 'bg-black border-red-2' : ''); ?>">
      <a class="nav-link" href="<?php echo e(route('blog.index')); ?>">
         <i class="<?php echo e(config('icons.blog')); ?>"></i>
         <?php echo e(__('Blog')); ?>

      </a>
   </li>
<?php endif; ?>

<?php if(Config::get('settings.darts') == 'visible'): ?>
   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dart-access')): ?>
      <li class="nav-item <?php echo e(Route::is('darts*') ? 'bg-black border-red-2' : ''); ?>">
         <a class="nav-link" href="<?php echo e(route('darts.index')); ?>">
            <i class="<?php echo e(config('icons.darts')); ?>"></i>
            <?php echo e(__('Darts')); ?>

         </a>
      </li>
   <?php endif; ?>
<?php endif; ?>

   <li class="nav-item <?php echo e(Route::is('about*') ? 'bg-black border-red-2' : ''); ?>">
      <a class="nav-link" href="<?php echo e(route('about')); ?>">
         <i class="<?php echo e(config('icons.about-us')); ?>"></i>
         About us
      </a>
   </li>
   
   <li class="nav-item <?php echo e(Route::is('contact*') ? 'bg-black border-red-2' : ''); ?>">
      <a class="nav-link" href="<?php echo e(route('contact')); ?>">
         <i class="<?php echo e(config('icons.contact-us')); ?>"></i>
         Contact us
      </a>
   </li>



</ul>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/layouts/UI/navbar/left/navbarLeft.blade.php ENDPATH**/ ?>