<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['category-manage','finish-manage','admin-general','material-manage','admin-settings','tag-manage','block-manage'])): ?>

	<li class="nav-item has-treeview <?php echo e((
			(Request::is('admin/blocks*')) ||
			(Request::is('admin/categories*')) ||
			(Request::is('admin/finishes*')) ||
			(Request::is('admin/general*')) ||
			(Request::is('admin/materials*')) ||
			(Request::is('admin/settings*')) ||
			(Request::is('admin/tags*'))
		) ? 'menu-open' : ''); ?>

	">

		<a href="#" class="nav-link <?php echo e((
				(Request::is('admin/blocks*')) ||
				(Request::is('admin/categorie*')) ||
				(Request::is('admin/finishes*')) ||
				(Request::is('admin/general*')) ||
				(Request::is('admin/materials*')) ||
				(Request::is('admin/settings*')) ||
				(Request::is('admin/tags*'))
			) ? 'active' : ''); ?>

		">
			<i class="<?php echo e(config('icons.tasks')); ?>"></i>
			<p>
				Site Configuration
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category-manage')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(Route('admin.categories.index')); ?>" class="nav-link <?php echo e(Request::is('admin/categories*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.categories')); ?>"></i>
						<p>Categories</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('finish-manage')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.finishes.index')); ?>" class="nav-link <?php echo e(Request::is('admin/finishes*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.finishes')); ?>"></i>
						<p>Finishes</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('block-manage')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.blocks.index')); ?>" class="nav-link <?php echo e(Request::is('admin/blocks') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.homepage')); ?>"></i>
						<p>Blocks</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('material-manage')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(Route('admin.materials.index')); ?>" class="nav-link <?php echo e(Request::is('admin/materials*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.materials')); ?>"></i>
						<p>Materials</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-settings')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.settings.index')); ?>" class="nav-link <?php echo e(Request::is('admin/settings*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.dashboard')); ?>"></i>
						<p>Settings</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('tag-manage')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.tags.index')); ?>" class="nav-link <?php echo e(Request::is('admin/tags*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.tags')); ?>"></i>
						<p>Tags</p>
					</a>
				</li>
			<?php endif; ?>

		</ul>

	</li>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/layouts/admin/sidebars/left/configuration.blade.php ENDPATH**/ ?>