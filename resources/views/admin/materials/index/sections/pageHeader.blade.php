@section('pageHeader')
   <i class="{{ config('icons.materials') }}"></i>
   @if(Route::currentRouteName('') == 'admin.materials.trashed')
      Trashed Materials
   @else
      Materials
   @endif
@endsection