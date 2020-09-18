{{-- SERVINGS --}}

<div class="form-group">

   <label for="servings" class="col-form-label {{ $required ?? '' }}">Servings</label>

   <input
   	type="number"
   	name="servings"
   	id="servings"
   	value="{{ old('servings') ?? $recipe->servings }}"
   	class="form-control form-control-sm @error('servings') is-invalid @enderror"
   />
   
   @error('servings')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
