<!-- DESCRIPTION -->

<div class="form-group">

   <label for="description" class="{{ $required ?? '' }}">
      {{ $label ?? 'Description' }}
   </label>
   
   <textarea
   	name="description"
   	id="description"
   	rows="8"
   	class="simple form-control form-control-sm @error('description') is-invalid @enderror">{{ old('description') ?? $feature->description }}</textarea>
   
   @error('description')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>