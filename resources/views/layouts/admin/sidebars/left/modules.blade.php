@canany(['bug-manage','carving-manage','faq-manage','feature-manage','post-manage','project-manage','recipe-manage'])

	<li class="nav-item has-treeview {{ (
			(Request::is('admin/bugs*')) ||
			(Request::is('admin/carvings*')) ||
			(Request::is('admin/faqs*')) ||
			(Request::is('admin/features*')) ||
			(Request::is('admin/posts*')) ||
			(Request::is('admin/projects*')) ||
			(Request::is('admin/recipes*'))
		) ? 'menu-open' : '' }}
	">

		<a href="#" class="nav-link {{ (
				(Request::is('admin/bugs*')) ||
				(Request::is('admin/carvings*')) ||
				(Request::is('admin/faqs*')) ||
				(Request::is('admin/features*')) ||
				(Request::is('admin/posts*')) ||
				(Request::is('admin/projects*')) ||
				(Request::is('admin/recipes*'))
			) ? 'active' : '' }}
		">
			<i class="{{ config('icons.modules') }}"></i>
			<p>
				Modules
				<i class="right fas fa-angle-left"></i>
			</p>
		</a>

		<ul class="nav nav-treeview">

			@can('bug-manage')
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.bugs.index') }}" class="nav-link {{ Request::is('admin/bugs*') ? 'active' : '' }}">
						<i class="{{ config('icons.bugs') }}"></i>
						<p>Bug Reports</p>
					</a>
				</li>
			@endcan

			@can('carving-manage')
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.carvings.index') }}" class="nav-link {{ Request::is('admin/carvings*') ? 'active' : '' }}">
						<i class="{{ config('icons.carvings') }}"></i>
						<p>
							@if(\Config::get('settings.carvings') == 'hidden')
								<span class="text-danger">Carvings (CNC)</span>
							@else
								Carvings (CNC)
							@endif            
						</p>
					</a>
				</li>
			@endcan

			@can('faq-manage')
				<li class="nav-item ml-1">
					<a href="{{ route('admin.faqs.index') }}" class="nav-link {{ Request::is('admin/faqs*') ? 'active' : '' }}">
						<i class="{{ config('icons.faq') }}"></i>
						<p>FAQs</p>
					</a>
				</li>
			@endcan

			@can('feature-manage')
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.features.index') }}" class="nav-link {{ Request::is('admin/features*') ? 'active' : '' }}">
						<i class="{{ config('icons.features') }}"></i>
						<p>Feature Requests</p>
					</a>
				</li>
			@endcan

			@can('post-manage')
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.posts.index') }}" class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}">
						<i class="{{ config('icons.posts') }}"></i>
						<p>
							@if(\Config::get('settings.blog') == 'hidden')
								<span class="text-danger">Posts</span>
							@else
								Posts
							@endif
						</p>
					</a>
				</li>
			@endcan

			@can('project-manage')
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.projects.index') }}" class="nav-link {{ Request::is('admin/projects*') ? 'active' : '' }}">
						<i class="{{ config('icons.projects') }}"></i>
						<p>
							@if(\Config::get('settings.projects') == 'hidden')
								<span class="text-danger">Projects</span>
							@else
								Projects
							@endif
						</p>
					</a>
				</li>
			@endcan

			@can('recipe-manage')
				<li class="nav-item ml-1">
					<a href="{{ Route('admin.recipes.index') }}" class="nav-link {{ Request::is('admin/recipes*') ? 'active' : '' }}">
						<i class="{{ config('icons.recipes') }}"></i>
						<p>
							@if(\Config::get('settings.recipes') == 'hidden')
								<span class="text-danger">Recipes</span>
							@else
								Recipes
							@endif
						</p>
					</a>
				</li>
			@endcan

		</ul>

	</li>

@endcan
