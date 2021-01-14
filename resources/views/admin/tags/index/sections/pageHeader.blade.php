@section('pageHeader')
   <i class="{{ config('icons.tags') }}"></i>
   @if(Route::currentRouteName('') == 'admin.tags.trashed')
      Trashed
   @endif
   Tags
@endsection