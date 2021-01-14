{{-- @can('post-manage') --}}
	
	<li class="nav-item has-treeview {{ ((Request::is('admin/posts*')) || (Request::is('admin/tags*'))) ? 'menu-open' : '' }}">
		
		<a href="#" class="nav-link {{ ((Request::is('admin/posts*')) || (Request::is('admin/tags*'))) ? 'active' : '' }}">
			<i class="{{ config('icons.posts') }}"></i>
			<p>
				Posts
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">
		
			{{-- @can('post-manage') --}}
				<li class="nav-item ml-2">
					<a href="{{ Route('admin.posts.index') }}" class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}">
						<i class="{{ config('icons.posts') }}"></i>
						<p>Posts</p>
					</a>
				</li>
			{{-- @endcan --}}

			{{-- @can('tags-manage') --}}
				<li class="nav-item ml-2">
					<a href="{{ route('admin.tags.index') }}" class="nav-link {{ Request::is('admin/tags*') ? 'active' : '' }}">
						<i class="{{ config('icons.tags') }}"></i>
						<p>Tags</p>
					</a>
				</li>
			{{-- @endcan --}}

		</ul>
	
	</li>

{{-- @endcan --}}
