@section('pageHeader')
   <i class="{{ config('icons.faq') }}"></i>
   {{ ucwords($faq->question) }} FAQ Information
@endsection