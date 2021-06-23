<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['bug-manage','carving-manage','faq-manage','feature-manage','post-manage','project-manage','recipe-manage'])): ?>

	<li class="nav-item has-treeview <?php echo e((
			(Request::is('admin/bugs*')) ||
			(Request::is('admin/carvings*')) ||
			(Request::is('admin/faqs*')) ||
			(Request::is('admin/features*')) ||
			(Request::is('admin/posts*')) ||
			(Request::is('admin/projects*')) ||
			(Request::is('admin/recipes*'))
		) ? 'menu-open' : ''); ?>

	">

		<a href="#" class="nav-link <?php echo e((
				(Request::is('admin/bugs*')) ||
				(Request::is('admin/carvings*')) ||
				(Request::is('admin/faqs*')) ||
				(Request::is('admin/features*')) ||
				(Request::is('admin/posts*')) ||
				(Request::is('admin/projects*')) ||
				(Request::is('admin/recipes*'))
			) ? 'active' : ''); ?>

		">
			<i class="<?php echo e(config('icons.modules')); ?>"></i>
			<p>
				Modules
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bug-manage')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(Route('admin.bugs.index')); ?>" class="nav-link <?php echo e(Request::is('admin/bugs*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.bugs')); ?>"></i>
						<p>Bug Reports</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-manage')): ?>
				<li class="nav-item ml-3">
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

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('faq-manage')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.faqs.index')); ?>" class="nav-link <?php echo e(Request::is('admin/faqs*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.faq')); ?>"></i>
						<p>FAQs</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('feature-manage')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(Route('admin.features.index')); ?>" class="nav-link <?php echo e(Request::is('admin/features*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.features')); ?>"></i>
						<p>Feature Requests</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post-manage')): ?>
				<li class="nav-item ml-3">
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
				<li class="nav-item ml-3">
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
				<li class="nav-item ml-3">
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

		</ul>

	</li>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/layouts/admin/sidebars/left/modules.blade.php ENDPATH**/ ?>