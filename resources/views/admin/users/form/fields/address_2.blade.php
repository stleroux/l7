{{-- ADDRESS_2 --}}

<div class="form-group">

   <label for="address_2" class="{{ $required ?? '' }}">
      {{ $label ?? 'Address 2' }}
   </label>
   
   <input
      type="text"
      name="address_2"
      id="address_2"
      class="form-control @error('address_2') is-invalid @enderror"
      value="{{ old('address_2') ?? $user->address_2 }}"
      placeholder="Address 2"
      data-inputmask=""
   />
   
   @error('address_2')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
