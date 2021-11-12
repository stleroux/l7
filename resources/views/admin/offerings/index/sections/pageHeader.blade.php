@section('pageHeader')

   <i class="{{ config('icons.carvings') }}"></i>

   @if(Route::currentRouteName() == 'admin.offerings.trashed')
      Trashed Offerings
   @else
      Offerings
   @endif

@endsection
