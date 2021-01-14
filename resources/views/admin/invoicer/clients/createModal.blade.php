<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('admin.invoicer.clients.store') }}" class="needs-validation" novalidate method="POST">
        	@csrf

        	<input type="text" name="popup" value="popup">
          
          <div class="form-group">
            <label for="contact_name">Contact Name</label>
            <input type="text" name="contact_name" class="form-control" id="contact_name" required>
            <div class="invalid-feedback">
              Please enter a valid contact name
            </div>
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>

          <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" name="email" class="form-control" required>
            <div class="invalid-feedback">
              Please enter a valid email address
            </div>
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>

          <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" name="telephone" class="form-control" required>
            <div class="invalid-feedback">
              Please enter a valid phone number
            </div>
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>

          <div class="form-check mb-1">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@section('scripts')
<script>
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
</script>

@endsection