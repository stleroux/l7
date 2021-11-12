@canany(['admin-logreader','admin-notifications','admin-audits'])

	<li class="nav-item has-treeview {{ (
			(Request::is('admin/user-activity*')) ||
			(Request::is('admin/log-reader*')) ||
			(Request::is('admin/notifications*'))
		) ? 'menu-open' : '' }}
	">

		<a href="#" class="nav-link {{ (
				(Request::is('admin/user-activity*')) ||
				(Request::is('admin/log-reader*')) ||
				(Request::is('admin/notifications*'))
			) ? 'active' : '' }}
		">
			<i class="{{ config('icons.monitor') }}"></i>
			<p>
				Monitoring
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">

			@can('admin-logreader')
				<li class="nav-item ml-1">
					<a href="/admin/log-reader" class="nav-link {{ Request::is('admin/log-reader*') ? 'active' : '' }}" target="_blank">
						<i class="{{ config('icons.logs') }}"></i>
						<p>Log Reader</p>
					</a>
				</li>
			@endcan

			@can('admin-notifications')
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.notifications.all') }}" class="nav-link {{ Request::is('admin/notifications*') ? 'active' : '' }}">
						<i class="{{ config('icons.bell') }}"></i>
						<p>Notifications</p>
					</a>
				</li>
			@endcan

			@can('admin-audits')
				<li class="nav-item ml-1">
					<a href="/admin/user-activity" class="nav-link {{ Request::is('admin/user-activity*') ? 'active' : '' }}" target="_blank">
						<i class="{{ config('icons.users') }}"></i>
						<p>User Activity</p>
					</a>
				</li>
			@endcan


		</ul>

	</li>

@endcan
