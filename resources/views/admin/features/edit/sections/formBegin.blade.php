@section('formBegin')
   <form action="{{ route('admin.features.update', $feature) }}" method="POST">
      @csrf
      @method('PUT')
@endsection