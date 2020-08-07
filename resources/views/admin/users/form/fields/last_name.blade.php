{{-- LAST NAME --}}

<div class="form-group">

   <label for="last_name" class="{{ $required ?? '' }}">
      {{ $label ?? 'Last Name' }}
   </label>
   
   <input
      type="text"
      name="last_name"
      id="last_name"
      class="form-control @error('last_name') is-invalid @enderror"
      value="{{ old('last_name') ?? $user->last_name }}"
      placeholder="Last name"
      data-inputmask=""
   />
   
   @error('last_name')
      <span class="invalid-feedback d-inline" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
