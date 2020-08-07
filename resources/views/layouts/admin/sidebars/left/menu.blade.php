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

@include('layouts.admin.sidebars.left.projects')
@include('layouts.admin.sidebars.left.userManagement')

{{-- <li class="nav-item has-treeview">
   
   <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
         Dashboard
         <i class="right fas fa-angle-left"></i>
      </p>
   </a>

   <ul class="nav nav-treeview">
      <li class="nav-item">
         <a href="../../index.html" class="nav-link">
            <i class="far fa-circle nav-icon ml-2"></i>
            <p>Dashboard v1</p>
         </a>
      </li>

      <li class="nav-item">
         <a href="../../index2.html" class="nav-link">
            <i class="far fa-circle nav-icon ml-2"></i>
            <p>Dashboard v2</p>
         </a>
      </li>

      <li class="nav-item">
         <a href="../../index3.html" class="nav-link">
            <i class="far fa-circle nav-icon ml-2"></i>
            <p>Dashboard v3</p>
         </a>
      </li>
   </ul>

</li> --}}

