@canany(['permission-manage','role-manage','user-manage'])

	<li class="nav-item has-treeview {{ (
			(Request::is('admin/permissions*')) ||
			(Request::is('admin/roles*')) ||
			(Request::is('admin/users*'))
		) ? 'menu-open' : '' }}
	">

		<a href="#" class="nav-link {{ ((Request::is('admin/permissions*')) || (Request::is('admin/roles*')) || (Request::is('admin/users*'))) ? 'active' : '' }}">
			<i class="{{ config('icons.userManagement') }}"></i>
			<p>
				User Management
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">

			@can('permission-manage')
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.permissions.index') }}" class="nav-link {{ Request::is('admin/permissions*') ? 'active' : '' }}">
						<i class="{{ config('icons.permissions') }}"></i>
						<p>Permissions</p>
					</a>
				</li>
			@endcan

			@can('role-manage')
				<li class="nav-item ml-1">
					<a href="{{ route('admin.roles.index') }}" class="nav-link {{ Request::is('admin/roles*') ? 'active' : '' }}">
						<i class="{{ config('icons.roles') }}"></i>
						<p>Roles</p>
					</a>
				</li>
			@endcan

			@can('user-manage')
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.users.index') }}" class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}">
						<i class="{{ config('icons.users') }}"></i>
						<p>Users</p>
					</a>
				</li>
			@endcan

		</ul>

	</li>

@endcan
