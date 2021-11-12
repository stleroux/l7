@section('formBegin')
   <form action="{{ route('admin.offerings.update', $offering) }}" method="POST" enctype="multipart/form-data" class="m-0 p-0">
      @method('PUT')
      @csrf
@endsection