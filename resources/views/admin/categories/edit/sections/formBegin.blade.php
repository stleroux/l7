@section('formBegin')
   <form action="{{ route('admin.categories.update', $category) }}" method="POST">
      @csrf
      @method('PUT')
@endsection