@section('pageHeader')
   <i class="{{ config('icons.projects') }}"></i>
   @if(Route::currentRouteName() == 'admin.projects.trashed')
      Trashed Projects
   @else
      Projects
   @endif
@endsection