@section('formBegin')
   <form action="{{ route('admin.materials.update', $material) }}" method="POST">
      @csrf
      @method('PUT')
@endsection