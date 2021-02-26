{{-- LOGIN COUNT --}}

<div class="form-group">

   <label for="login_count" class="{{ $required ?? '' }}">
      {{ $label ?? 'Login Count' }}
   </label>

   @if(Route::currentRouteName('') == 'admin.users.show' || Route::currentRouteName('') == 'admin.users.edit')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->login_count !!}
      </div>

   @else

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

   @endif
   
   @error('login_count')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
