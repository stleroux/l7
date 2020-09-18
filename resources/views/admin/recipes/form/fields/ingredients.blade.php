<!-- INGREDIENT -->

<div class="form-group">

   <label for="ingredients" class="{{ $required ?? '' }}">
      {{ $label ?? 'Ingredients' }}
   </label>
   
   <textarea
   	name="ingredients"
   	id="ingredients"
   	rows="8"
   	class="simple form-control form-control-sm @error('ingredients') is-invalid @enderror">{{ old('ingredients') ?? $recipe->ingredients }}</textarea>
   
   @error('ingredients')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
