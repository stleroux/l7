<div class="card card-primary">

   <div class="card-header p-2">Pages</div>
   
   <div class="card-body p-1">

      <a href="{{ route('admin.notifications.all') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.notifications.all') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.bell') }}"></i>
         All Notifications
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ Auth()->user()->notifications->count() }}
         </div>
      </a>

      <!-- Generate links based on options in Model -->
{{--       @foreach(App\Models\Bug::statusOptions() as $statusOptionKey => $statusOptionValue)
         <a href="{{ route('admin.bugs.'.strtolower(str_replace(" ", "", $statusOptionValue))) }}"
            class="btn btn-block btn-default text-left {{ request()->routeIs('admin.bugs.'.strtolower(str_replace(" ", "", $statusOptionValue))) ? 'buttonActive' : '' }}">
            <i class="{{ config('icons.bugs') }}"></i>
            {{ ucfirst($statusOptionValue) }}
            <div class="badge badge-dark badge-pill float-right mt-1">
               {{ App\Models\Bug::where('status', $statusOptionKey)->count() }}
            </div>
         </a>
      @endforeach --}}

      <a href="{{ route('admin.notifications.unread') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.notifications.unread') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.bell') }}"></i>
         Unread Notifications
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ Auth()->user()->unreadNotifications->count() }}
         </div>
      </a>

      <a href="{{ route('admin.notifications.read') }}"
         class="btn btn-block btn-default text-left {{ request()->routeIs('admin.notifications.read') ? 'buttonActive' : '' }}">
         <i class="{{ config('icons.bell') }}"></i>
         Read Notifications
         <div class="badge badge-dark badge-pill float-right mt-1">
            {{ Auth()->user()->readNotifications->count() }}
         </div>
      </a>
      
   </div>
   
</div>
