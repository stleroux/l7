<li class="nav-item">
   <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
      <i class="{{ Config::get('icons.dashboard') }}"></i>
      <p>Dashboard</p>
   </a>
</li>

@can('article-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.users.index') }}" class="nav-link {{ Request::is('admin/articles*') ? 'active' : '' }}">
         <i class="{{ Config::get('icons.articles') }}"></i>
         <p>Articles</p>
      </a>
   </li>
@endcan

@can('category-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.categories.index') }}" class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
         <i class="{{ Config::get('icons.categories') }}"></i>
         <p>Categories</p>
      </a>
   </li>
@endcan

{{-- @can('recipe-manage') --}}
   <li class="nav-item">
      <a href="{{ Route('admin.recipes.index') }}" class="nav-link {{ Request::is('admin/recipes*') ? 'active' : '' }}">
         <i class="{{ Config::get('icons.recipes') }}"></i>
         <p>Recipes</p>
      </a>
   </li>
{{-- @endcan --}}

   {{-- <li class="nav-item">
      <a href="{{ Route('admin.posts.index') }}" class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}">
         <i class="{{ Config::get('icons.posts') }}"></i>
         <p>Posts</p>
      </a>
   </li> --}}

@include('layouts.admin.sidebars.left.invoicer')

@include('layouts.admin.sidebars.left.projects')

@include('layouts.admin.sidebars.left.posts')

@include('layouts.admin.sidebars.left.userManagement')
