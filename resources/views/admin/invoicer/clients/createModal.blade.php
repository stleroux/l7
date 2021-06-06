<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

@if($errors->clientErrors->any())
	<div class="alert alert-danger text-light px-2">
		{{ Config::get('settings.formSubmissionError') }}
	</div>
@endif

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Create New Client</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			{{-- <form action="{{ route('admin.invoicer.clients.store') }}" class="needs-validation" novalidate method="POST"> --}}
			<form action="{{ route('admin.invoicer.clients.store') }}" method="POST">
				@csrf
			
				<div class="modal-body">

					<input type="hidden" name="popup" value="popup">
					
					<div class="form-group">
						<label for="contact_name" class="required">Contact Name</label>
						<input
							type="text"
							name="contact_name"
							class="form-control @error('contact_name', 'clientErrors') is-invalid @enderror"
							value="{{ old('contact_name') }}">
					   	{{-- <span class="text-danger">{{ $errors->clientErrors->first('contact_name') }}</span> --}}
						@error('contact_name', 'clientErrors')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror

					</div>

					<div class="form-group">
						<label for="company_name">Company Name</label>
						<input
							type="text"
							name="company_name"
							class="form-control @error('company_name', 'clientErrors') is-invalid @enderror"
							value="{{ old('company_name') }}">
						{{-- <span class="text-danger">{{ $errors->clientErrors->first('company_name') }}</span> --}}
						@error('company_name', 'clientErrors')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<label for="email" class="required">Email Address</label>
						<input
							type="text"
							name="email"
							class="form-control @error('email', 'clientErrors') is-invalid @enderror"
							value="{{ old('email') }}">
						{{-- <span class="text-danger">{{ $errors->clientErrors->first('email') }}</span> --}}
						@error('email', 'clientErrors')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="form-group">
						<label for="telephone" class="required">Telephone</label>
						<input
							type="text"
							name="telephone"
							class="form-control @error('telephone', 'clientErrors') is-invalid @enderror"
							value="{{ old('telephone') }}"
							data-inputmask="'mask': '(999) 999-9999'">
						{{-- <span class="text-danger">{{ $errors->clientErrors->first('telephone') }}</span> --}}
						@error('telephone', 'clientErrors')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

				</div>
				
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</form>

		</div>

	</div>

</div>

@section('scripts')
{{-- <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();	
</script> --}}



@if(count($errors->clientErrors) > 0)
<script type="text/javascript">
{{-- @if (count($errors) > 0) --}}
		$('#exampleModal').modal('show');
</script>
@endif
@endsection