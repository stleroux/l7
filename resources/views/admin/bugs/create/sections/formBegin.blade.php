@section('formBegin')
   <form action="{{ route('admin.bugs.store') }}" method="POST" class="m-0 p-0">
      @csrf
@endsection