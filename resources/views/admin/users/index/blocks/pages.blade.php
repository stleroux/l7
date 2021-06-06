<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.users.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.users.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.users') }}" ></i>
         All Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\User::count() }}
         </div>
      </a>

      <a href="{{ route('admin.users.approved') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.users.approved') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.enable') }} text-primary"></i>
         Approved Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\User::approved()->count() }}
         </div>
      </a>

      <a href="{{ route('admin.users.disabled') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.users.disabled') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.disabled') }} text-pink"></i>
         Disabled Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\User::disabled()->count() }}
         </div>
      </a>

      <a href="{{ route('admin.users.noRoles') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.users.noRoles') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.role') }} text-primary"></i>
         Users Without Roles
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{-- {{ App\Models\User::withCount('roles')->count() }} --}}
            
               {{ App\Models\User::withCount('roles')->has('roles', 0)->count() }}
            
            {{-- {{ $usersWithoutRoles->count() }} --}}
         </div>
      </a>

      <a href="{{ route('admin.users.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.users.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Users
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\User::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
