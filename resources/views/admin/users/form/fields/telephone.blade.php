{{-- TELEPHONE --}}

<div class="form-group">

   <label for="telephone" class="{{ $required ?? '' }}">
      {{ $label ?? 'Phone Number' }}
   </label>
   
   <input
   	type="text"
   	name="telephone"
   	id="telephone"
   	class="form-control @error('telephone') is-invalid @enderror"
   	value="{{ old('telephone') ?? $user->telephone }}"
      placeholder="Phone Number"
      data-inputmask="'mask': '(999) 999-9999'"
      {{ $disabled ?? '' }}
   />
   
   @error('telephone')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
