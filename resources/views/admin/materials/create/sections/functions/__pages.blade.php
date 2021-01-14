<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.materials.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.materials.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.materials') }}"></i>
         All Materials
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Role::count() }}
         </div>
      </a>

      <a href="{{ route('admin.materials.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.materials.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Materials
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Role::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
