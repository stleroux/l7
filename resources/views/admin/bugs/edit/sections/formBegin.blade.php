@section('formBegin')
   <form action="{{ route('admin.bugs.update', $bug) }}" method="POST">
      @csrf
      @method('PUT')
@endsection