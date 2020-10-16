{{-- PREP TIME MINUTES--}}

<div class="form-group">

   <label for="prep_time_minutes" class="col-form-label {{ $required ?? '' }}">Prep Time <small>(Minutes)</small></label>

   <input
   	type="number"
   	name="prep_time_minutes"
   	id="prep_time_minutes"
   	value="{{ old('prep_time_minutes') ?? $recipe->prep_time_minutes }}"
   	class="form-control form-control-sm @error('prep_time_minutes') is-invalid @enderror"
   	placeholder="minutes"
   />
   
   @error('prep_time_minutes')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
