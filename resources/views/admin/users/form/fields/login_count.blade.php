{{-- LOGIN COUNT --}}

<div class="form-group">

   <label for="login_count" class="{{ $required ?? '' }}">
      {{ $label ?? 'Login Count' }}
   </label>

   <input
   	type="number"
   	name="login_count"
   	id="login_count"
   	value="{{ old('login_count') ?? $user->login_count }}"
   	class="form-control @error('login_count') is-invalid @enderror"
      placeholder="Login Count"
      data-inputmask=""
      {{ $disabled ?? '' }}
   />
   
   @error('login_count')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
