@section('formBegin')
	<form action="{{ route('admin.faqs.store') }}" method="POST" class="m-0 p-0">
      @csrf
@endsection