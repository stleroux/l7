{{-- <li class="nav-header">MULTI LEVEL EXAMPLE</li> --}}

<li class="nav-item has-treeview {{ ((Request::is('admin/projects*')) || (Request::is('admin/projects/finishes*')) || (Request::is('admin/projects/materials*'))) ? 'menu-open' : '' }}">
	<a href="#" class="nav-link {{ ((Request::is('admin/projects*')) || (Request::is('admin/projects/finishes*')) || (Request::is('admin/projects/materials*'))) ? 'active' : '' }}">
		<i class="{{ Config::get('icons.projects') }}"></i>
		<p>
			Projects
			<i class="right fas fa-angle-left"></i>
		</p>
	</a>

	<ul class="nav nav-treeview">
		<li class="nav-item ml-2">
			<a href="{{ Route('admin.projects.index') }}" class="nav-link {{ Request::is('admin/projects') ? 'active' : '' }}">
				<i class="{{ Config::get('icons.projects') }}"></i>
				<p>Projects</p>
			</a>
		</li>

		<li class="nav-item ml-2">
			<a href="{{ route('admin.projects.finishes.index') }}" class="nav-link {{ Request::is('admin/projects/finishes*') ? 'active' : '' }}">
				<i class="{{ Config::get('icons.finishes') }}"></i>
				<p>Finishes</p>
			</a>
		</li>

		<li class="nav-item ml-2">
			<a href="{{ Route('admin.projects.materials.index') }}" class="nav-link {{ Request::is('admin/projects/materials*') ? 'active' : '' }}">
				<i class="{{ Config::get('icons.materials') }}"></i>
				<p>Materials</p>
			</a>
		</li>
	</ul>
</li>
