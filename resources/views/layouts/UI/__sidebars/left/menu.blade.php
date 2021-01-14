<li class="nav-item">
   <a href="{{ route('homepage') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
      <i class="{{ config('icons.homepage') }}"></i>
      <p>Home</p>
   </a>
</li>

{{-- @can('post-browse') --}}
   <li class="nav-item">
      <a href="{{-- {{ Route('posts.index') }} --}}" class="nav-link {{ Request::is('posts*') ? 'active' : '' }}">
         <i class="{{ config('icons.articles') }}"></i>
         <p>Articles / Blog / Posts</p>
      </a>
   </li>
{{-- @endcan --}}

{{-- @can('recipe-browse') --}}
   <li class="nav-item">
      <a href="{{-- {{ Route('recipes.index') }} --}}" class="nav-link {{ Request::is('recipes*') ? 'active' : '' }}">
         <i class="{{ config('icons.recipes') }}"></i>
         <p>Recipes</p>
      </a>
   </li>
{{-- @endcan --}}

{{-- @can('recipe-browse') --}}
   <li class="nav-item">
      <a href="#" class="nav-link {{ ((Request::is('admin/projects*')) || (Request::is('admin/projects/finishes*')) || (Request::is('admin/projects/materials*'))) ? 'active' : '' }}">
         <i class="{{ config('icons.projects') }}"></i>
         <p>Projects</p>
      </a>
   </li>
{{-- @endcan --}}



{{-- @include('layouts.admin.sidebars.left.projects') --}}
{{-- @include('layouts.admin.sidebars.left.userManagement') --}}





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

