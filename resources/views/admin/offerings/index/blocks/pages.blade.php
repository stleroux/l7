<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.offerings.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.offerings.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.carvings') }}"></i>
         All Offerings
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Offering::count() }}
         </div>
      </a>

      <a href="{{ route('admin.offerings.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.offerings.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Offerings
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Offering::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
