<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.projects.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.projects.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.projects') }}"></i>
         All Projects
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Project::count() }}
         </div>
      </a>

      <a href="{{ route('admin.projects.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.projects.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Projects
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Project::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
