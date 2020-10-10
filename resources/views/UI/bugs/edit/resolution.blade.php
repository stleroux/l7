<!-- RESOLUTION -->

<div class="form-group">

   <label for="resolution" class="{{ $required ?? '' }}">
      {{ $label ?? 'Resolution' }}
   </label>
   
   <textarea
   	name="resolution"
   	id="resolution"
   	rows="8"
   	class="simple form-control form-control-sm @error('resolution') is-invalid @enderror">{{ old('resolution') ?? $bug->resolution }}</textarea>
   
   @error('resolution')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>