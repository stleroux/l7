<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['permission-manage','role-manage','user-manage'])): ?>

	<li class="nav-item has-treeview <?php echo e((
			(Request::is('admin/permissions*')) ||
			(Request::is('admin/roles*')) ||
			(Request::is('admin/users*'))
		) ? 'menu-open' : ''); ?>

	">

		<a href="#" class="nav-link <?php echo e(((Request::is('admin/permissions*')) || (Request::is('admin/roles*')) || (Request::is('admin/users*'))) ? 'active' : ''); ?>">
			<i class="<?php echo e(config('icons.userManagement')); ?>"></i>
			<p>
				User Management
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-manage')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(Route('admin.permissions.index')); ?>" class="nav-link <?php echo e(Request::is('admin/permissions*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.permissions')); ?>"></i>
						<p>Permissions</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-manage')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(route('admin.roles.index')); ?>" class="nav-link <?php echo e(Request::is('admin/roles*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.roles')); ?>"></i>
						<p>Roles</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user-manage')): ?>
				<li class="nav-item ml-3">
					<a href="<?php echo e(Route('admin.users.index')); ?>" class="nav-link <?php echo e(Request::is('admin/users*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.users')); ?>"></i>
						<p>Users</p>
					</a>
				</li>
			<?php endif; ?>

		</ul>

	</li>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/layouts/admin/sidebars/left/userManagement.blade.php ENDPATH**/ ?>