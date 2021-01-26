{{-- PREP TIME --}}

<div class="form-group pr-2">

   <label for="prep_time" class="col-form-label {{ $required ?? '' }}">Prep Time</label>

   <div class="form-row">
      <div class="col p-0">

         <input
         	type="text"
         	name="prep_time_hours"
         	id="prep_time_hours"
         	value="{{ old('prep_time_hours') ?? $recipe->prep_time_hours }}"
         	class="form-control form-control-sm @error('prep_time_hours') is-invalid @enderror"
         	placeholder="hours"
         />
         <small>Hours</small>

         @error('prep_time_hours')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
         @enderror

      </div>

      <div class="col p-0">
         
         <input
            type="text"
            name="prep_time_minutes"
            id="prep_time_minutes"
            value="{{ old('prep_time_minutes') ?? $recipe->prep_time_minutes }}"
            class="form-control form-control-sm @error('prep_time_minutes') is-invalid @enderror"
            placeholder="minutes"
         />
         <small>Minutes</small>
         
         @error('prep_time_minutes')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
         @enderror
      
      </div>

   </div>

</div>
