@section('formBegin')
	<form action="{{ route('admin.settings.store') }}" method="POST">
		@csrf
@endsection