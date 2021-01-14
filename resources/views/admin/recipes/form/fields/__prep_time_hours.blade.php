{{-- PREP TIME --}}

<div class="form-group">

   <label for="prep_time_hours" class="col-form-label {{ $required ?? '' }}">Prep Time <small>(Hours)</small></label>

   <input
   	type="number"
   	name="prep_time_hours"
   	id="prep_time_hours"
   	value="{{ old('prep_time_hours') ?? $recipe->prep_time_hours }}"
   	class="form-control form-control-sm @error('prep_time_hours') is-invalid @enderror"
   	placeholder="hours"
   />
   
   @error('prep_time_hours')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
