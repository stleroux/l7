{{-- <div class="card card-primary">

   <div class="card-header p-2">Pages</div>
   
   <div class="card-body p-1">

      <a href="{{ route('admin.bugs.index') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.bugs.index') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.bugs') }}"></i>
         All Bugs
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Bug::count() }}
         </div>
      </a>

      <!-- Generate links based on options in Model -->
      @foreach(App\Models\Bug::statusOptions() as $statusOptionKey => $statusOptionValue)
         <a href="{{ route('admin.bugs.'.strtolower(str_replace(" ", "", $statusOptionValue))) }}"
            class="btn btn-block btn-default text-left {{ request()->routeIs('admin.bugs.'.strtolower(str_replace(" ", "", $statusOptionValue))) ? 'buttonActive' : '' }}">
            <i class="{{ config('icons.bugs') }}"></i>
            {{ ucfirst($statusOptionValue) }}
            <div class="badge badge-dark badge-pill float-right mt-1">
               {{ App\Models\Bug::where('status', $statusOptionKey)->count() }}
            </div>
         </a>
      @endforeach

      <a href="{{ route('admin.bugs.trashed') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.bugs.trashed') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.bugs') }} text-pink"></i>
         Trashed Bugs
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ App\Models\Bug::trashedCount()->count() }}
         </div>
      </a>
      
   </div>
   
</div> --}}
