@section('formBegin')
   <form action="{{ route('admin.users.update', $user) }}" method="POST">
      @csrf
      @method('PUT')
@endsection