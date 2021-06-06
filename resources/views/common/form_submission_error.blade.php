@if($errors->any())
	<div class="alert alert-danger text-light px-2">
		{{ Config::get('settings.formSubmissionError') }}
	</div>
@endif
