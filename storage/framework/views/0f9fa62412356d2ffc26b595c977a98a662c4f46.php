<li class="nav-item">
   <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link <?php echo e(Request::is('admin/dashboard*') ? 'active' : ''); ?>">
      <i class="<?php echo e(config('icons.dashboard')); ?>"></i>
      <p>Dashboard</p>
   </a>
</li>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.users.index')); ?>" class="nav-link <?php echo e(Request::is('admin/articles*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.articles')); ?>"></i>
         <p>Articles</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bug-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.bugs.index')); ?>" class="nav-link <?php echo e(Request::is('admin/bugs*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.bugs')); ?>"></i>
         <p>Bug Reports</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.carvings.index')); ?>" class="nav-link <?php echo e(Request::is('admin/carvings*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.carvings')); ?>"></i>
         <p>
            <?php if(\Config::get('settings.carvings') == 'hidden'): ?>
               <span class="text-danger">Carvings (CNC)</span>
            <?php else: ?>
               Carvings (CNC)
            <?php endif; ?>            
         </p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.categories.index')); ?>" class="nav-link <?php echo e(Request::is('admin/categories*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.categories')); ?>"></i>
         <p>Categories</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(route('admin.faqs.index')); ?>" class="nav-link <?php echo e(Request::is('admin/faqs*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.faq')); ?>"></i>
         <p>FAQs</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('feature-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.features.index')); ?>" class="nav-link <?php echo e(Request::is('admin/features*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.features')); ?>"></i>
         <p>Feature Requests</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('finish-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(route('admin.finishes.index')); ?>" class="nav-link <?php echo e(Request::is('admin/finishes*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.finishes')); ?>"></i>
         <p>Finishes</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-general')): ?>
   <li class="nav-item">
      <a href="<?php echo e(route('admin.general')); ?>" class="nav-link <?php echo e(Request::is('admin/general') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.homepage')); ?>"></i>
         <p>General</p>
      </a>
   </li>
<?php endif; ?>

<?php echo $__env->make('layouts.admin.sidebars.left.invoicer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('material-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.materials.index')); ?>" class="nav-link <?php echo e(Request::is('admin/materials*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.materials')); ?>"></i>
         <p>Materials</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('movie-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.movies.index')); ?>" class="nav-link <?php echo e(Request::is('admin/movies*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.movies')); ?>"></i>
         <p>Movies</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-notifications')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.notifications.all')); ?>" class="nav-link <?php echo e(Request::is('admin/notifications*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.bell')); ?>"></i>
         <p>Notifications</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.permissions.index')); ?>" class="nav-link <?php echo e(Request::is('admin/permissions*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.permissions')); ?>"></i>
         <p>Permissions</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.posts.index')); ?>" class="nav-link <?php echo e(Request::is('admin/posts*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.posts')); ?>"></i>
         <p>
            <?php if(\Config::get('settings.blog') == 'hidden'): ?>
               <span class="text-danger">Posts</span>
            <?php else: ?>
               Posts
            <?php endif; ?>
         </p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.projects.index')); ?>" class="nav-link <?php echo e(Request::is('admin/projects*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.projects')); ?>"></i>
         <p>
            <?php if(\Config::get('settings.projects') == 'hidden'): ?>
               <span class="text-danger">Projects</span>
            <?php else: ?>
               Projects
            <?php endif; ?>
         </p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('recipe-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.recipes.index')); ?>" class="nav-link <?php echo e(Request::is('admin/recipes*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.recipes')); ?>"></i>
         <p>
            <?php if(\Config::get('settings.recipes') == 'hidden'): ?>
               <span class="text-danger">Recipes</span>
            <?php else: ?>
               Recipes
            <?php endif; ?>
         </p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(route('admin.roles.index')); ?>" class="nav-link <?php echo e(Request::is('admin/roles*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.roles')); ?>"></i>
         <p>Roles</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-settings')): ?>
   <li class="nav-item">
      <a href="<?php echo e(route('admin.settings.index')); ?>" class="nav-link <?php echo e(Request::is('admin/settings*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.dashboard')); ?>"></i>
         <p>Settings</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('tag-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(route('admin.tags.index')); ?>" class="nav-link <?php echo e(Request::is('admin/tags*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.tags')); ?>"></i>
         <p>Tags</p>
      </a>
   </li>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-manage')): ?>
   <li class="nav-item">
      <a href="<?php echo e(Route('admin.users.index')); ?>" class="nav-link <?php echo e(Request::is('admin/users*') ? 'active' : ''); ?>">
         <i class="<?php echo e(config('icons.users')); ?>"></i>
         <p>Users</p>
      </a>
   </li>
<?php endif; ?>


<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-audits')): ?>
   <li class="nav-item">
      <a href="/admin/user-activity" class="nav-link <?php echo e(Request::is('admin/user-activity*') ? 'active' : ''); ?>" target="_blank">
         <i class="<?php echo e(config('icons.users')); ?>"></i>
         <p>User Activity</p>
      </a>
   </li>
<?php endif; ?>




<?php /**PATH C:\sites\l7\resources\views/layouts/admin/sidebars/left/menu.blade.php ENDPATH**/ ?>