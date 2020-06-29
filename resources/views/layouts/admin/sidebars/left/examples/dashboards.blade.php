<li class="nav-item">
   <a href="{{ route('admin.dashboard') }}" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>Dashboard</p>
   </a>
</li>

@can('permission-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.permissions.index') }}" class="nav-link">
         <i class="fas fa-user-shield nav-icon"></i>
         <p>Permissions</p>
      </a>
   </li>
@endcan

@can('role-manage')
   <li class="nav-item">
      <a href="{{ route('admin.roles.index') }}" class="nav-link">
         <i class="fas fa-user-tag nav-icon"></i>
         <p>Roles</p>
      </a>
   </li>
@endcan

@can('user-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.users.index') }}" class="nav-link">
         <i class="fas fa-users nav-icon"></i>
         <p>Users</p>
      </a>
   </li>
@endcan


--------------------


<li class="nav-item">
   <a href="{{ Route('admin.users.index') }}" class="nav-link">
      <i class="fas fa-users nav-icon"></i>
      <p>Recipes</p>
   </a>
</li>

<li class="nav-item">
   <a href="{{ Route('admin.users.index') }}" class="nav-link">
      <i class="fas fa-users nav-icon"></i>
      <p>Projects</p>
   </a>
</li>

<li class="nav-item">
   <a href="{{ Route('admin.users.index') }}" class="nav-link">
      <i class="fas fa-users nav-icon"></i>
      <p>Articles</p>
   </a>
</li>

@can('category-manage')
   <li class="nav-item">
      <a href="{{ Route('admin.categories.index') }}" class="nav-link">
         <i class="fa fa-sitemap nav-icon"></i>
         <p>Categories</p>
      </a>
   </li>
@endcan


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