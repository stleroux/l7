<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.users.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
         <i class="{{ Config::get('icons.users') }}" ></i>
         All Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\User::count() }}
         </div>
      </a>

      <a href="{{ route('admin.users.active') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.users.active') ? 'active' : '' }}">
         <i class="{{ Config::get('icons.active') }} text-primary"></i>
         Active Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\User::active()->count() }}
         </div>
      </a>

      <a href="{{ route('admin.users.inactive') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.users.inactive') ? 'active' : '' }}">
         <i class="{{ Config::get('icons.inactive') }} text-primary"></i>
         Inactive Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\User::inactive()->count() }}
         </div>
      </a>

      <a href="{{ route('admin.users.noRoles') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.users.noRoles') ? 'active' : '' }}">
         <i class="{{ Config::get('icons.role') }} text-primary"></i>
         Users Without Roles
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{-- {{ App\Models\User::withCount('roles')->count() }} --}}
            
               {{ App\Models\User::withCount('roles')->has('roles', 0)->count() }}
            
            {{-- {{ $usersWithoutRoles->count() }} --}}
         </div>
      </a>

      <a href="{{ route('admin.users.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.users.trashed') ? 'active' : '' }}">
         <i class="{{ Config::get('icons.trashed') }} text-pink"></i>
         Trashed Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\User::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
