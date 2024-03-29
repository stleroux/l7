<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.permissions.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.permission.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.permissions') }}"></i>
         All Permissions
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Permission::count() }}
         </div>
      </a>
      
      <a href="{{ route('admin.permissions.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.permissions.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Permissions
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Permission::trashedCount()->count() }}
         </div>
      </a>


{{--       <a href="{{ route('admin.roles.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.roles.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.roles') }}"></i>
         All Roles
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Role::count() }}
         </div>
      </a>

      <a href="{{ route('admin.roles.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.roles.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Roles
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Role::trashedCount()->count() }}
         </div>
      </a> --}}
      
   </div>
</div>
