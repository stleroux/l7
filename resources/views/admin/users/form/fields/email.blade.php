<!-- EMAIL -->

 <div class="form-group">

   <label for="email" class="{{ $required ?? '' }}">
      {{ $label ?? 'E-Mail' }}
   </label>
   
   <input
      type="text"
      name="email"
      id="email"
      class="form-control @error('email') is-invalid @enderror"
      value="{{ old('email') ?? $user->email }}"
      autofocus
      autocomplete="email"
      placeholder="Email address"
      data-inputmask="'mask': '*{1,64}@*{1,63}.*{1,63}'"
      {{ $disabled ?? '' }}
   />

   @error('email')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
   
</div>
