<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.carvings.carvings.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.carvings.carvings.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.carvings') }}"></i>
         All Carvings
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Carving::count() }}
         </div>
      </a>

      <a href="{{ route('admin.carvings.carvings.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.carvings.carvings.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Carvings
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Carving::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
