{{-- <li class="nav-header">MULTI LEVEL EXAMPLE</li> --}}

<li class="nav-item has-treeview {{ ((Request::is('admin/permissions*')) || (Request::is('admin/roles*')) || (Request::is('admin/users*'))) ? 'menu-open' : '' }}">
	<a href="#" class="nav-link {{ ((Request::is('admin/permissions*')) || (Request::is('admin/roles*')) || (Request::is('admin/users*'))) ? 'active' : '' }}">
		<i class="{{ Config::get('icons.management') }}"></i>
		<p>
			User Management
			<i class="right fas fa-angle-left"></i>
		</p>
	</a>

	<ul class="nav nav-treeview">
		<li class="nav-item ml-2">
			<a href="{{ Route('admin.permissions.index') }}" class="nav-link {{ Request::is('admin/permissions*') ? 'active' : '' }}">
				<i class="{{ Config::get('icons.permissions') }}"></i>
				<p>Permissions</p>
			</a>
		</li>

		<li class="nav-item ml-2">
			<a href="{{ route('admin.roles.index') }}" class="nav-link {{ Request::is('admin/roles*') ? 'active' : '' }}">
				<i class="{{ Config::get('icons.roles') }}"></i>
				<p>Roles</p>
			</a>
		</li>

		<li class="nav-item ml-2">
			<a href="{{ Route('admin.users.index') }}" class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}">
				<i class="{{ Config::get('icons.users') }}"></i>
				<p>Users</p>
			</a>
		</li>
	</ul>
</li>
