<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.categories.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.categories.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.categories') }}"></i>
         All Categories
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Category::count() }}
         </div>
      </a>
      
      <a href="{{ route('admin.categories.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.categories.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Categories
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Category::trashedCount()->count() }}
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
