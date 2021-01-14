@can('project-manage')
	
	<li class="nav-item has-treeview {{ ((Request::is('admin/projects*')) || (Request::is('admin/projects/finishes*')) || (Request::is('admin/projects/materials*'))) ? 'menu-open' : '' }}">
		
		<a href="#" class="nav-link {{ ((Request::is('admin/projects*')) || (Request::is('admin/projects/finishes*')) || (Request::is('admin/projects/materials*'))) ? 'active' : '' }}">
			<i class="{{ config('icons.projects') }}"></i>
			<p>
				Projects
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">
		
			@can('project-manage')
				<li class="nav-item ml-2">
					<a href="{{ Route('admin.projects.index') }}"
						class="nav-link
								{{ Request::is('admin/projects') ? 'active' : '' }}
								{{ Request::is('admin/projects/create') ? 'active' : '' }}
								{{ Route::Is('admin.projects.edit') ? 'active' : '' }}
								{{ Route::Is('admin.projects.trashed') ? 'active' : '' }}"
					>
						<i class="{{ config('icons.projects') }}"></i>
						<p>Projects</p>
					</a>
				</li>

				<li class="nav-item ml-2">
					<a href="{{ Route('admin.projects.carvings.index') }}"
						class="nav-link
								{{ Request::is('admin/projects/carvings') ? 'active' : '' }}
								{{ Request::is('admin/projects/carvings/create') ? 'active' : '' }}
								{{ Route::Is('admin.projects.carvings.edit') ? 'active' : '' }}
								{{ Route::Is('admin.projects.carvings.trashed') ? 'active' : '' }}
								"
					>
						<i class="{{ config('icons.carvings') }}"></i>
						<p>CNC Carvings</p>
					</a>
				</li>

			@endcan

			@can('project_finishes-manage')
				<li class="nav-item ml-2">
					<a href="{{ route('admin.projects.finishes.index') }}" class="nav-link {{ Request::is('admin/projects/finishes*') ? 'active' : '' }}">
						<i class="{{ config('icons.finishes') }}"></i>
						<p>Finishes</p>
					</a>
				</li>
			@endcan

			@can('project_materials-manage')
				<li class="nav-item ml-2">
					<a href="{{ Route('admin.projects.materials.index') }}" class="nav-link {{ Request::is('admin/projects/materials*') ? 'active' : '' }}">
						<i class="{{ config('icons.materials') }}"></i>
						<p>Materials</p>
					</a>
				</li>
			@endcan
		
		</ul>
	
	</li>

@endcan
