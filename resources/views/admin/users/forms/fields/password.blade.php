{{-- PASSWORD --}}

<div class="form-group">

   <label for="password" class="{{ $required ?? '' }}">
      {{ $label ?? 'Password' }}
   </label>
   
   <input
   	type="text"
   	name="password"
   	id="password"
   	class="form-control @error('password') is-invalid @enderror"
   	value="{{ old('password') }}"
      placeholder="Password"
      data-inputmask=""
      @if(Route::currentRouteName('') == 'admin.users.show')
         disabled
      @endif
   />

   @if(Route::currentRouteName('') == 'admin.users.create')
   	<small id="passwordHelpBlock" class="form-text text-muted">
   		Only enter a new password to overwrite the default (password).
   	</small>
   @elseif(Route::currentRouteName('') == 'admin.users.edit')
   	<small id="passwordHelpBlock" class="form-text text-muted">
   		Only enter a new password to change the current one.
   	</small>
   @endif
   
   @error('password')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
