@section('formBegin')
   <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
@endsection