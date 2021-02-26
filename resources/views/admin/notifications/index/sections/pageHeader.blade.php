@section('pageHeader')
   
   <i class="{{ config('icons.bell') }}"></i>

   @if(Route::currentRouteName() == 'admin.notifications.all')
   	All
   @elseif(Route::currentRouteName() == 'admin.notifications.unread')
   	Unread
   @elseif(Route::currentRouteName() == 'admin.notifications.read')
   	Read
   @endif

   Notifications

@endsection