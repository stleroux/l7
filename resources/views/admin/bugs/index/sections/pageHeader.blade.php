@section('pageHeader')
   <i class="{{ config('icons.bugs') }}"></i>
   @if(Route::currentRouteName('') == 'admin.bugs.new')
      Newly Reported Bugs
   @elseif(Route::currentRouteName('') == 'admin.bugs.pending')
      Pending Bugs
   @elseif(Route::currentRouteName('') == 'admin.bugs.notreproducible')
      Not Reproducible
   @elseif(Route::currentRouteName('') == 'admin.bugs.nonissue')
      Non Issue
   @elseif(Route::currentRouteName('') == 'admin.bugs.resolved')
      Resolved
   @elseif(Route::currentRouteName('') == 'admin.bugs.trashed')
      Trashed Bugs
   @else
      Bugs
   @endif
@endsection