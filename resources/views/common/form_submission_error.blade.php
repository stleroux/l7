@if($errors->any())
	@foreach($errors as $error)
		{{ $error->message }}
	@endforeach
	<div class="alert alert-danger text-light px-2">
		{{ Config::get('settings.formSubmissionError') }}
	</div>
@endif
