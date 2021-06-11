<div class="card card-trans-4">

	<div class="card-header section_header">
		<div class="card-title">Bug Information</div>
	</div>
	
	<div class="card-body pb-0">
		
		<div class="row">
			<div class="col">
				@include('UI.bugs.forms.fields.title', ['required'=>'required'])
			</div>
			<div class="col">
				@include('UI.bugs.forms.fields.page_url')
			</div>
			<div class="col-xl-2">
				@include('UI.bugs.forms.fields.status')
			</div>
		</div>

		<div class="row">
			<div class="col">
				@include('UI.bugs.forms.fields.description', ['required'=>'required'])
			</div>
		</div>

	</div> <!-- Card body -->

	<div class="card-footer p-1">
		{!! Config::get('settings.formFieldsRequired') !!}
	</div>

</div><!-- Card -->
