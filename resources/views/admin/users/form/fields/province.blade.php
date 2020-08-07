{{-- PROVINCE --}}

<div class="form-group">

   <label for="province" class="{{ $required ?? '' }}">
      {{ $label ?? 'Province' }}
   </label>
   
   <input
   	type="text"
   	name="province"
   	id="province"
   	class="form-control @error('province') is-invalid @enderror"
   	value="{{ old('province') ?? $user->province }}"
      placeholder="Province"
      data-inputmask=""
   />
   
   @error('province')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
