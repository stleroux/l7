@section('pageHeader')
   <i class="{{ config('icons.features') }}"></i>
   @if(Route::currentRouteName('') == 'admin.features.new')
      Newly Reported Features
   @elseif(Route::currentRouteName('') == 'admin.features.underreview')
      Under Review Features
   @elseif(Route::currentRouteName('') == 'admin.features.pending')
      Pending Features
   @elseif(Route::currentRouteName('') == 'admin.features.implemented')
      Implemented Features
   @elseif(Route::currentRouteName('') == 'admin.features.rejected')
      Rejected Features
   @elseif(Route::currentRouteName('') == 'admin.features.trashed')
      Trashed Features
   @else
      Features
   @endif
@endsection