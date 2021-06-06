@section('pageHeader')
   <i class="{{ config('icons.carvings') }}"></i>
   @if(Route::currentRouteName() == 'admin.carvings.trashed')
      Trashed Carvings
   @else
   	@if(request('tag'))
   		{{ ucwords(request('tag')) }}
   	@endif
      Carvings
   @endif
@endsection