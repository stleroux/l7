<li class="nav-item">
   <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
      <i class="{{ config('icons.dashboard') }}"></i>
      <p>Dashboard</p>
   </a>
</li>

@can('article-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.users.index') }}" class="nav-link {{ Request::is('admin/articles*') ? 'active' : '' }}">
         <i class="{{ config('icons.articles') }}"></i>
         <p>Articles</p>
      </a>
   </li>
@endcan

@can('bug-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.bugs.index') }}" class="nav-link {{ Request::is('admin/bugs*') ? 'active' : '' }}">
         <i class="{{ config('icons.bugs') }}"></i>
         <p>Bug Reports</p>
      </a>
   </li>
@endcan

@can('carving-manage')
   <li class="nav-item">
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

@can('category-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.categories.index') }}" class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
         <i class="{{ config('icons.categories') }}"></i>
         <p>Categories</p>
      </a>
   </li>
@endcan

@can('faq-manage')
   <li class="nav-item">
      <a href="{{ route('admin.faqs.index') }}" class="nav-link {{ Request::is('admin/faqs*') ? 'active' : '' }}">
         <i class="{{ config('icons.faq') }}"></i>
         <p>FAQs</p>
      </a>
   </li>
@endcan

@can('feature-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.features.index') }}" class="nav-link {{ Request::is('admin/features*') ? 'active' : '' }}">
         <i class="{{ config('icons.features') }}"></i>
         <p>Feature Requests</p>
      </a>
   </li>
@endcan

@can('finish-manage')
   <li class="nav-item">
      <a href="{{ route('admin.finishes.index') }}" class="nav-link {{ Request::is('admin/finishes*') ? 'active' : '' }}">
         <i class="{{ config('icons.finishes') }}"></i>
         <p>Finishes</p>
      </a>
   </li>
@endcan

@can('admin-general')
   <li class="nav-item">
      <a href="{{ route('admin.general') }}" class="nav-link {{ Request::is('admin/general') ? 'active' : '' }}">
         <i class="{{ config('icons.homepage') }}"></i>
         <p>General</p>
      </a>
   </li>
@endcan

@include('layouts.admin.sidebars.left.invoicer')

@can('material-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.materials.index') }}" class="nav-link {{ Request::is('admin/materials*') ? 'active' : '' }}">
         <i class="{{ config('icons.materials') }}"></i>
         <p>Materials</p>
      </a>
   </li>
@endcan

@can('movie-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.movies.index') }}" class="nav-link {{ Request::is('admin/movies*') ? 'active' : '' }}">
         <i class="{{ config('icons.movies') }}"></i>
         <p>Movies</p>
      </a>
   </li>
@endcan

@can('permission-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.permissions.index') }}" class="nav-link {{ Request::is('admin/permissions*') ? 'active' : '' }}">
         <i class="{{ config('icons.permissions') }}"></i>
         <p>Permissions</p>
      </a>
   </li>
@endcan

@can('post-manage')
   <li class="nav-item">
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
   <li class="nav-item">
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
   <li class="nav-item">
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

@can('role-manage')
   <li class="nav-item">
      <a href="{{ route('admin.roles.index') }}" class="nav-link {{ Request::is('admin/roles*') ? 'active' : '' }}">
         <i class="{{ config('icons.roles') }}"></i>
         <p>Roles</p>
      </a>
   </li>
@endcan

@can('admin-settings')
   <li class="nav-item">
      <a href="{{ route('admin.settings.index') }}" class="nav-link {{ Request::is('admin/settings*') ? 'active' : '' }}">
         <i class="{{ config('icons.dashboard') }}"></i>
         <p>Settings</p>
      </a>
   </li>
@endcan

@can('tag-manage')
   <li class="nav-item">
      <a href="{{ route('admin.tags.index') }}" class="nav-link {{ Request::is('admin/tags*') ? 'active' : '' }}">
         <i class="{{ config('icons.tags') }}"></i>
         <p>Tags</p>
      </a>
   </li>
@endcan

@can('role-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.users.index') }}" class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}">
         <i class="{{ config('icons.users') }}"></i>
         <p>Users</p>
      </a>
   </li>
@endcan


{{-- @include('layouts.admin.sidebars.left.userManagement') --}}
{{-- @include('layouts.admin.sidebars.left.projects') --}}
{{-- @include('layouts.admin.sidebars.left.posts') --}}