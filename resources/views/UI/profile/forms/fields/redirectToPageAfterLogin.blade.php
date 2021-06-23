{{-- REDIRECT_TO_PAGE_AFTER_LOGIN --}}

<div class="form-group">

   <label for="redirectAfterLogin" class="{{ $required ?? '' }}">
      {{ $label ?? 'Redirect To Page After Login' }}
      <small>(Use "/" in path)</small>
   </label>
   
   @if(Route::currentRouteName('') == 'profile.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->redirectAfterLogin !!}
      </div>

   @else

      <input
      	type="text"
      	name="redirectAfterLogin"
      	id="redirectAfterLogin"
      	class="form-control @error('redirectAfterLogin') is-invalid @enderror"
      	value="{{ old('redirectAfterLogin') ?? $user->redirectAfterLogin }}"
         placeholder="Redirect To Page After Login"
         data-inputmask=""
         {{ $disabled ?? '' }}
      />
      <small>Leave blank to be redirected to the homepage</small>

   @endif
   
   @error('redirectAfterLogin')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
