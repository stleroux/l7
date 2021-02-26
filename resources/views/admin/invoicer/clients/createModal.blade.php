<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Create New Client</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<form action="{{ route('admin.invoicer.clients.store') }}" class="needs-validation" novalidate method="POST">
				@csrf
			
				<div class="modal-body">

					<input type="hidden" name="popup" value="popup">
					
					<div class="form-group {{ $errors->has('contact_name') ? 'has-error' : '' }}">
						<label for="contact_name" class="required">Contact Name</label>
						<input type="text" name="contact_name" class="form-control" value="{{ old('contact_name') }}">
						<span class="text-danger">{{ $errors->first('contact_name') }}</span>
					</div>

					<div class="form-group">
						<label for="company_name">Company Name</label>
						<input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}">
						<span class="text-danger">{{ $errors->first('company_name') }}</span>
					</div>

					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="text" name="email" class="form-control" value="{{ old('email') }}">
						<span class="text-danger">{{ $errors->first('email') }}</span>
					</div>

					<div class="form-group">
						<label for="telephone">Telephone</label>
						<input type="text" name="telephone" class="form-control" value="{{ old('telephone') }}" data-inputmask="'mask': '(999) 999-9999'">
						<span class="text-danger">{{ $errors->first('telephone') }}</span>
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

<script type="text/javascript">
@if (count($errors) > 0)
		$('#exampleModal').modal('show');
@endif
</script>
@endsection