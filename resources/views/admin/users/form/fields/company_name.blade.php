{{-- COMPANY NAME --}}

<div class="form-group">

   <label for="company_name" class="{{ $required ?? '' }}">
      {{ $label ?? 'Company Name' }}
   </label>
   
   <input
      type="text"
      name="company_name"
      id="company_name"
      class="form-control @error('company_name') is-invalid @enderror"
      value="{{ old('company_name') ?? $user->company_name }}"
      placeholder="Company Name"
      data-inputmask=""
      {{ $disabled ?? '' }}
   />
   
   @error('company_name')
      <span class="invalid-feedback d-inline" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
