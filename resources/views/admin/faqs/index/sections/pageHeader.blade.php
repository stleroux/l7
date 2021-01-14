@section('pageHeader')
   <i class="{{ config('icons.faqs') }}"></i>
   @if(Route::currentRouteName() == 'admin.faqs.trashed')
      Trashed Faqs
   @else
      Faqs
   @endif
@endsection