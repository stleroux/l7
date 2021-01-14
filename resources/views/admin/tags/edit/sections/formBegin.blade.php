@section('formBegin')
   <form action="{{ route('admin.tags.update', $tag) }}" method="POST">
      @csrf
      @method('PUT')
@endsection