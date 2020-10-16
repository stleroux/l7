{{-- COOK TIME HOURS --}}

<div class="form-group">

   <label for="cook_time_hours" class="col-form-label {{ $required ?? '' }}">Cook Time <small>(Hours)</small></label>

   <input
   	type="number"
   	name="cook_time_hours"
   	id="cook_time_hours"
   	value="{{ old('cook_time_hours') ?? $recipe->cook_time_hours }}"
   	class="form-control form-control-sm @error('cook_time_hours') is-invalid @enderror"
   	placeholder="hours"
   />
   
   @error('cook_time_hours')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
