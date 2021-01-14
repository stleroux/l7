<!-- LOGIN COUNT WARNING -->

<div class="form-group">

   <label for="login_count_warning" class="{{ $required ?? '' }}">
      {{ $label ?? 'Login Count Warning' }}
   </label>
   
   <input
      type="text"
      name="login_count_warning"
      id="login_count_warning"
      class="form-control @error('login_count_warning') is-invalid @enderror"
      value="{{ old('loginCountWarning') ?? Config::get('settings.loginCountWarning') }}"
      placeholder="login_count_warning"
      data-inputmask=""
   />
   <small>How many times a user has to login to the site before the New User Panel is no longer shown</small>
   
   @error('login_count_warning')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>