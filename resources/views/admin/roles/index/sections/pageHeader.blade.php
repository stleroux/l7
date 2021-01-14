@section('pageHeader')
   <i class="{{ config('icons.roles') }}"></i>
   @if(Route::currentRouteName('') == 'admin.roles.trashed')
      Trashed Roles
   @elseif(Route::currentRouteName('') == 'admin.roles.noPermissions')
      Roles without Permissions
   @else
      Roles
   @endif
@endsection