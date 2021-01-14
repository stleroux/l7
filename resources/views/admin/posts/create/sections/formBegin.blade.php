@section('formBegin')
   <form action="{{ route('admin.posts.store', $post) }}" method="POST" enctype="multipart/form-data">
      @csrf
@endsection