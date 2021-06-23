@section('formBegin')
   <form action="{{ route('admin.blocks.update', $block) }}" method="POST">
      @csrf
      @method('PUT')
@endsection