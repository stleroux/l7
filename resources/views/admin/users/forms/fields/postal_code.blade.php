{{-- POSTAL CODE --}}

<div class="form-group">

   <label for="postal_code" class="{{ $required ?? '' }}">
      {{ $label ?? 'Postal Code' }}
   </label>
   
   @if(Route::currentRouteName('') == 'admin.users.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $user->postal_code !!}
      </div>

   @else

      <input
      	type="text"
      	name="postal_code"
      	id="postal_code"
      	class="form-control @error('postal_code') is-invalid @enderror"
      	value="{{ old('postal_code') ?? $user->postal_code }}"
         placeholder="Postal Code"
         data-inputmask="'mask': 'A9A-9A9'"
         {{ $disabled ?? '' }}
      />

   @endif
   
   @error('postal_code')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
