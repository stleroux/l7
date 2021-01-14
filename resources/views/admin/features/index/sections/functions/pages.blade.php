<div class="card card-primary">
   <div class="card-header p-2">Pages</div>
   <div class="card-body p-1">

      <a href="{{ route('admin.features.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.features.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.features') }}"></i>
         All Features
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Feature::count() }}
         </div>
      </a>

      <!-- Generate links based on options in Model -->
      @foreach(App\Models\Feature::statusOptions() as $statusOptionKey => $statusOptionValue)
         <a href="{{ route('admin.features.'.strtolower(str_replace(" ", "", $statusOptionValue))) }}"
            class="btn btn-block btn-default text-left {{ request()->routeIs('admin.features.'.strtolower(str_replace(" ", "", $statusOptionValue))) ? 'buttonActive' : '' }}">
            <i class="{{ config('icons.features') }}"></i>
            {{ ucfirst($statusOptionValue) }}
            <div class="badge badge-dark badge-pill float-right mt-1">
               {{ App\Models\Feature::where('status', $statusOptionKey)->count() }}
            </div>
         </a>
      @endforeach

      <a href="{{ route('admin.features.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.features.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.trashed') }} text-pink"></i>
         Trashed Features
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Feature::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
</div>
