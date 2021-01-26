{{-- COOK TIME --}}

<div class="form-group">

   <label for="cook_time" class="col-form-label {{ $required ?? '' }}">Cook Time</label>

   <div class="form-row">
      <div class="col p-0">
      
         <input
         	type="text"
         	name="cook_time_hours"
         	id="cook_time_hours"
         	value="{{ old('cook_time_hours') ?? $recipe->cook_time_hours }}"
         	class="form-control form-control-sm @error('cook_time_hours') is-invalid @enderror"
         	placeholder="hours"
         />
         <small>Hours</small>

         @error('cook_time_hours')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
         @enderror
      </div>

      <div class="col p-0">

         <input
            type="text"
            name="cook_time_minutes"
            id="cook_time_minutes"
            value="{{ old('cook_time_minutes') ?? $recipe->cook_time_minutes }}"
            class="form-control form-control-sm @error('cook_time_minutes') is-invalid @enderror"
            placeholder="minutes"
         />
         <small>Minutes</small>

         @error('cook_time_minutes')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
         @enderror

      </div>

   </div>

</div>
