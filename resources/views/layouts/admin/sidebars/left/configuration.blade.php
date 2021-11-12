@canany(['category-manage','finish-manage','admin-general','material-manage','admin-settings','tag-manage','block-manage'])

	<li class="nav-item has-treeview {{ (
			(Request::is('admin/blocks*')) ||
			(Request::is('admin/categories*')) ||
			(Request::is('admin/finishes*')) ||
			(Request::is('admin/general*')) ||
			(Request::is('admin/materials*')) ||
			(Request::is('admin/offerings*')) ||
			(Request::is('admin/settings*')) ||
			(Request::is('admin/tags*'))
		) ? 'menu-open' : '' }}
	">

		<a href="#" class="nav-link {{ (
				(Request::is('admin/blocks*')) ||
				(Request::is('admin/categorie*')) ||
				(Request::is('admin/finishes*')) ||
				(Request::is('admin/general*')) ||
				(Request::is('admin/materials*')) ||
				(Request::is('admin/offerings*')) ||
				(Request::is('admin/settings*')) ||
				(Request::is('admin/tags*'))
			) ? 'active' : '' }}
		">
			<i class="{{ config('icons.tasks') }}"></i>
			<p>
				Site Configuration
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">

			@can('block-manage')
				<li class="nav-item ml-1">
					<a href="{{ route('admin.blocks.index') }}" class="nav-link {{ Request::is('admin/blocks*') ? 'active' : '' }}">
						<i class="{{ config('icons.homepage') }}"></i>
						<p>Blocks</p>
					</a>
				</li>
			@endcan

			@can('category-manage')
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.categories.index') }}" class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
						<i class="{{ config('icons.categories') }}"></i>
						<p>Categories</p>
					</a>
				</li>
			@endcan

			@can('finish-manage')
				<li class="nav-item ml-1">
					<a href="{{ route('admin.finishes.index') }}" class="nav-link {{ Request::is('admin/finishes*') ? 'active' : '' }}">
						<i class="{{ config('icons.finishes') }}"></i>
						<p>Finishes</p>
					</a>
				</li>
			@endcan

			@can('material-manage')
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.materials.index') }}" class="nav-link {{ Request::is('admin/materials*') ? 'active' : '' }}">
						<i class="{{ config('icons.materials') }}"></i>
						<p>Materials</p>
					</a>
				</li>
			@endcan

			{{-- @can('material-manage') --}}
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.offerings.index') }}" class="nav-link {{ Request::is('admin/offerings*') ? 'active' : '' }}">
						<i class="{{ config('icons.carvings') }}"></i>
						<p>Offerings <small>(Carvings)</small></p>
					</a>
				</li>
			{{-- @endcan --}}

			@can('admin-settings')
				<li class="nav-item ml-1">
					<a href="{{ route('admin.settings.index') }}" class="nav-link {{ Request::is('admin/settings*') ? 'active' : '' }}">
						<i class="{{ config('icons.dashboard') }}"></i>
						<p>Settings</p>
					</a>
				</li>
			@endcan

			@can('tag-manage')
				<li class="nav-item ml-1">
					<a href="{{ route('admin.tags.index') }}" class="nav-link {{ Request::is('admin/tags*') ? 'active' : '' }}">
						<i class="{{ config('icons.tags') }}"></i>
						<p>Tags</p>
					</a>
				</li>
			@endcan

		</ul>

	</li>

@endcan
