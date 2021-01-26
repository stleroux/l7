<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.finishes.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.finishes.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.finishes') }}"></i>
         All Finishes
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Finish::count() }}
         </div>
      </a>

      <a href="{{ route('admin.finishes.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.finishes.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Finishes
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Finish::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
