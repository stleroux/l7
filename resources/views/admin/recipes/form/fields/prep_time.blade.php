{{-- PREP TIME --}}

<div class="form-group">

   <label for="prep_time" class="col-form-label {{ $required ?? '' }}">Prep Time <small>(Minutes)</small></label>

   <input
   	type="number"
   	name="prep_time"
   	id="prep_time"
   	value="{{ old('prep_time') ?? $recipe->prep_time }}"
   	class="form-control form-control-sm @error('prep_time') is-invalid @enderror"
   	placeholder="minutes"
   />
   
   @error('prep_time')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
