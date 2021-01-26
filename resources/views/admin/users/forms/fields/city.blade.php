{{-- CITY --}}

<div class="form-group">

   <label for="city" class="{{ $required ?? '' }}">
      {{ $label ?? 'City' }}
   </label>
   
   <input
      type="text"
      name="city"
      id="city"
      class="form-control @error('city') is-invalid @enderror"
      value="{{ old('city') ?? $user->city }}"
      placeholder="City"
      data-inputmask=""
      {{ $disabled ?? '' }}
   />
   
   @error('city')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
