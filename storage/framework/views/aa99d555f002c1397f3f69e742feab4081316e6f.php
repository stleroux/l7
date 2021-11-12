<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['admin-logreader','admin-notifications','admin-audits'])): ?>

	<li class="nav-item has-treeview <?php echo e((
			(Request::is('admin/user-activity*')) ||
			(Request::is('admin/log-reader*')) ||
			(Request::is('admin/notifications*'))
		) ? 'menu-open' : ''); ?>

	">

		<a href="#" class="nav-link <?php echo e((
				(Request::is('admin/user-activity*')) ||
				(Request::is('admin/log-reader*')) ||
				(Request::is('admin/notifications*'))
			) ? 'active' : ''); ?>

		">
			<i class="<?php echo e(config('icons.monitor')); ?>"></i>
			<p>
				Monitoring
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-logreader')): ?>
				<li class="nav-item ml-1">
					<a href="/admin/log-reader" class="nav-link <?php echo e(Request::is('admin/log-reader*') ? 'active' : ''); ?>" target="_blank">
						<i class="<?php echo e(config('icons.logs')); ?>"></i>
						<p>Log Reader</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-notifications')): ?>
				<li class="nav-item ml-1">
					<a href="<?php echo e(Route('admin.notifications.all')); ?>" class="nav-link <?php echo e(Request::is('admin/notifications*') ? 'active' : ''); ?>">
						<i class="<?php echo e(config('icons.bell')); ?>"></i>
						<p>Notifications</p>
					</a>
				</li>
			<?php endif; ?>

			<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin-audits')): ?>
				<li class="nav-item ml-1">
					<a href="/admin/user-activity" class="nav-link <?php echo e(Request::is('admin/user-activity*') ? 'active' : ''); ?>" target="_blank">
						<i class="<?php echo e(config('icons.users')); ?>"></i>
						<p>User Activity</p>
					</a>
				</li>
			<?php endif; ?>


		</ul>

	</li>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/layouts/admin/sidebars/left/monitoring.blade.php ENDPATH**/ ?>