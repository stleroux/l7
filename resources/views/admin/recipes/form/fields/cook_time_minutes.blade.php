{{-- COOK TIME MINUTES --}}

<div class="form-group">

   <label for="cook_time_minutes" class="col-form-label {{ $required ?? '' }}">Cook Time <small>(Minutes)</small></label>

   <input
   	type="number"
   	name="cook_time_minutes"
   	id="cook_time_minutes"
   	value="{{ old('cook_time_minutes') ?? $recipe->cook_time_minutes }}"
   	class="form-control form-control-sm @error('cook_time_minutes') is-invalid @enderror"
   	placeholder="minutes"
   />
   
   @error('cook_time_minutes')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
