{{-- PUBLIC EMAIL --}}

<div class="form-group">

	<label for="public_email" class="{{ $required ?? '' }}">
		{{ $label ?? 'Is Email Public?' }}
	</label>

	<br />
	
	@if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {{ ($user->public_email) ? 'Yes' : 'No' }}
      </div>

   @else

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
		   {{ $disabled ?? '' }}
		/>

	@endif

	@error('public_email')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
