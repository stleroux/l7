{{-- PREVIOUS LOGIN DATE --}}

<div class="form-group">

   <label for="previous_login_date" class="{{ $required ?? '' }}">
      {{ $label ?? 'Previous Login Date' }}
   </label>
   
   <input
   	type="text"
   	name="previous_login_date"
   	id="previous_login_date"
   	value="{{ old('previous_login_date') ?? $user->previous_login_date }}"
   	class="form-control @error('previous_login_date') is-invalid @enderror"
      placeholder="Previous Login Date"
      data-inputmask=""
      readonly
   />
   
   @error('previous_login_date')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
