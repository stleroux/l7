@section('pageHeader')
   <i class="{{ Config::get('icons.users') }}"></i>
   @if(Route::currentRouteName('') == 'admin.users.trashed')
      Trashed Users
   @elseif(Route::currentRouteName('') == 'admin.users.noRoles')
      Users Without Roles
   @elseif(Route::currentRouteName('') == 'admin.users.active')
      Active Users
   @elseif(Route::currentRouteName('') == 'admin.users.inactive')
      Inactive Users
   @else
      Users
   @endif
@endsection