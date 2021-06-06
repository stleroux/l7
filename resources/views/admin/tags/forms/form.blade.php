@include('common.form_submission_error')

<div class="card card-primary">

	<div class="card-header p-2">
		{{-- <div class="card-title"> --}}
		Tag Information
		{{-- </div> --}}
	</div>

	<div class="card-body p-2">
		<div class="row">
			@include('admin.tags.forms.fields.name')
			@include('admin.tags.forms.fields.category')
		</div>
	</div> <!-- Card body -->

</div><!-- Card -->
