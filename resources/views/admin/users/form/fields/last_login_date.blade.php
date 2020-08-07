{{-- LAST LOGIN DATE --}}

<div class="form-group">

   <label for="last_login_date" class="{{ $required ?? '' }}">
      {{ $label ?? 'Last Login Date' }}
   </label>
   
   <input
   	type="text"
   	name="last_login_date"
   	id="last_login_date"
   	value="{{ old('last_login_date') ?? $user->last_login_date }}"
   	class="form-control @error('last_login_date') is-invalid @enderror"
      placeholder="Last Login Date"
      data-inputmask=""
      readonly
   />
   
   @error('last_login_date')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
