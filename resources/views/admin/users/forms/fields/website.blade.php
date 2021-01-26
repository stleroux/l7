{{-- WEBSITE --}}

<div class="form-group">

   <label for="website" class="{{ $required ?? '' }}">
      {{ $label ?? 'Website Address' }}
   </label>
   
   <input
   	type="text"
   	name="website"
   	id="website"
   	class="form-control @error('website') is-invalid @enderror"
   	value="{{ old('website') ?? $user->website }}"
      placeholder="Website Address"
      data-inputmask=""
      {{ $disabled ?? '' }}
   />
   
   @error('website')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
