{{-- PUBLIC EMAIL --}}

<div class="form-group">

	<label for="public_email" class="{{ $required ?? '' }}">
		{{ $label ?? 'Is Email Prublic?' }}
	</label>

	<br />
	
	<input
	   type="checkbox"
	   name="public_email"
	   id="public_email"
	   class="form-control"
	   data-bootstrap-switch
	   data-off-color="danger"
	   data-off-text="Private"
	   data-on-color="success"
	   data-on-text="Public"
	   placeholder="public"
	   data-inputmask=""
	   @if($user->public_email || old('public_email')) checked @endif
	/>

	@error('public_email')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
