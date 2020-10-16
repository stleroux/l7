@section('pageHeader')
   <i class="{{ Config::get('icons.edit') }}"></i>
   Edit User :: {{ $user->username }}
@endsection