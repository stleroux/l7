<!-- METHODOLOGY -->

<div class="form-group">

   <label for="methodology" class="{{ $required ?? '' }}">
      {{ $label ?? 'Methodology' }}
   </label>
   
   <textarea
   	name="methodology"
   	id="methodology"
   	rows="8"
   	class="simple form-control form-control-sm @error('methodology') is-invalid @enderror">{{ old('methodology') ?? $recipe->methodology }}</textarea>
   
   @error('methodology')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
