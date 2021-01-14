@section('pageHeader')
   <i class="{{ config('icons.carvings') }}"></i>
   @if(Route::currentRouteName() == 'admin.carvings.trashed')
      Trashed CNC Carvings
   @else
      CNC Carvings
   @endif
@endsection