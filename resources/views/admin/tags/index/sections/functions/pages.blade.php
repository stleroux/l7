<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.tags.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.tags.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.tags') }}"></i>
         All Tags
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Tag::count() }}
         </div>
      </a>

      <a href="{{ route('admin.tags.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.tags.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Tags
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Tag::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
