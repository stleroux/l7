{{-- APPROVED --}}

<div class="form-group">
	
   <label for="account_status" class="{{ $required ?? '' }}">
   	{{ $label ?? 'Account Status' }}
   </label>
   
	<input
	   type="checkbox"
	   name="account_status"
	   id="account_status"
	   class="form-control"
	   data-bootstrap-switch
	   data-off-color="danger"
	   data-off-text="Disabled"
	   data-on-color="success"
	   data-on-text="Enabled"
	   placeholder="Status"
	   data-inputmask=""
	   @if($user->account_status || old('account_status')) checked @endif
	   {{ $disabled ?? '' }}
	/>

	@error('account_status')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
