{{-- COOK TIME --}}

<div class="form-group">

   <label for="cook_time" class="col-form-label {{ $required ?? '' }}">Cook Time <small>(Minutes)</small></label>

   <input
   	type="number"
   	name="cook_time"
   	id="cook_time"
   	value="{{ old('cook_time') ?? $recipe->cook_time }}"
   	class="form-control form-control-sm @error('cook_time') is-invalid @enderror"
   	placeholder="minutes"
   />
   
   @error('cook_time')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
