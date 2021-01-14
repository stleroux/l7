@section('pageHeader')
   <i class="{{ config('icons.users') }}"></i>
   @if(Route::currentRouteName('') == 'admin.users.trashed')
      Trashed Users
   @elseif(Route::currentRouteName('') == 'admin.users.noRoles')
      Users Without Roles
   @elseif(Route::currentRouteName('') == 'admin.users.approved')
      Approved Users
   @elseif(Route::currentRouteName('') == 'admin.users.disabled')
      Disabled Users
   @else
      Users
   @endif
@endsection