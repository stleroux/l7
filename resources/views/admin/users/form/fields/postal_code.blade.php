{{-- POSTAL CODE --}}

<div class="form-group">

   <label for="postal_code" class="{{ $required ?? '' }}">
      {{ $label ?? 'Postal Code' }}
   </label>
   
   <input
   	type="text"
   	name="postal_code"
   	id="postal_code"
   	class="form-control @error('postal_code') is-invalid @enderror"
   	value="{{ old('postal_code') ?? $user->postal_code }}"
      placeholder="Postal Code"
      data-inputmask="'mask': 'A9A-9A9'"
   />
   
   @error('postal_code')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
