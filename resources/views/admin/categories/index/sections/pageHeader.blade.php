@section('pageHeader')
   <i class="{{ config('icons.categories') }}"></i>
   @if(Route::currentRouteName() == 'admin.categories.index')
      Categories
   @else
      Trashed Categories
   @endif
@endsection
