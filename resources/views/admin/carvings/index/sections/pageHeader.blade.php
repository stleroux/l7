@section('pageHeader')
   <i class="{{ config('icons.carvings') }}"></i>
   @if(Route::currentRouteName() == 'admin.carvings.trashed')
      Trashed Carvings
   @else
   	@if(request('tag'))
   		{{ request('tag') }}
   	@endif
      Carvings
   @endif
@endsection