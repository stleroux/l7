@section('pageHeader')
   <i class="{{ config('icons.edit') }}"></i>
   Edit Recipe :: {{ ucwords($recipe->title) }}
@endsection