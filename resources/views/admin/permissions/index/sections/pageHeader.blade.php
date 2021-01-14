@section('pageHeader')
   <i class="{{ config('icons.permissions') }}"></i>
   @if(Route::currentRouteName() == 'admin.permissions.index')
      Permissions
   @else
      Trashed Permissions
   @endif
@endsection