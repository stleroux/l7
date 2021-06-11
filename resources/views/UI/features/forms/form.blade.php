<div class="card card-trans-4">

	<div class="card-header section_header">
		<div class="card-title">Feature Information</div>
	</div>

	<div class="card-body pb-0">

		<div class="row">
			<div class="col">
				@include('UI.features.forms.fields.title', ['required'=>'required'])
			</div>
			<div class="col-xl-2">
				@include('UI.features.forms.fields.status')
			</div>
		</div>

		<div class="row">
			<div class="col">
				@include('UI.features.forms.fields.description', ['required'=>'required'])
			</div>
		</div>

	</div> <!-- Card body -->

	<div class="card-footer p-1">
		{!! Config::get('settings.formFieldsRequired') !!}
	</div>

</div><!-- Card -->
