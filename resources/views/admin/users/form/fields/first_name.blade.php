<!-- FIRST NAME -->

<div class="form-group">

   <label for="first_name" class="{{ $required ?? '' }}">
      {{ $label ?? 'First name' }}
   </label>
   
   <input
      type="text"
      name="first_name"
      id="first_name"
      class="form-control @error('first_name') is-invalid @enderror"
      value="{{ old('first_name') ?? $user->first_name }}"
      placeholder="First name"
      data-inputmask=""
      {{ $disabled ?? '' }}
   />

   @error('first_name')
      <span class="invalid-feedback d-inline" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
</div>
