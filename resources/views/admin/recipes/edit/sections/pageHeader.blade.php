@section('pageHeader')
   <i class="{{ Config::get('icons.edit') }}"></i>
   Edit Recipe :: {{ ucwords($recipe->title) }}
@endsection