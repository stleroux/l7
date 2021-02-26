<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      @if(Route::currentRouteName() == 'admin.notifications.all')
         @include('admin.notifications.actions.markAllRead')
         @include('admin.notifications.actions.markAllUnread')
         @include('admin.notifications.actions.destroyAll')
      @endif

      @if(Route::currentRouteName() == 'admin.notifications.unread')
         @include('admin.notifications.actions.markAllRead')
         {{-- @include('admin.notifications.actions.markAllUnread') --}}
         @include('admin.notifications.actions.destroyAll')
      @endif

      @if(Route::currentRouteName() == 'admin.notifications.read')
         {{-- @include('admin.notifications.actions.markAllRead') --}}
         @include('admin.notifications.actions.markAllUnread')
         @include('admin.notifications.actions.destroyAll')
      @endif

   </div>
</div>
