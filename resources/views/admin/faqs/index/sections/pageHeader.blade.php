@section('pageHeader')

   <i class="{{ config('icons.faq') }}"></i>

   @if(Route::currentRouteName() == 'admin.faqs.trashed')
      Trashed Faqs
   @else
      Faqs
   @endif

@endsection
