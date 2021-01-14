@section('pageHeader')
   <i class="{{ config('icons.finishes') }}"></i>
   @if(Route::currentRouteName('') == 'admin.finishes.trashed')
      Trashed Finishes
   @else
      Finishes
   @endif
@endsection