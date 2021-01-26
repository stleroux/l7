<!-- PUBLIC NOTES -->
   
<div class="form-group">
   
   <label for="public_notes" class="col-form-label {{ $required ?? '' }}">Public Notes</label>
   
   <textarea
   	name="public_notes"
   	id="public_notes"
   	rows="2"
   	cols=""
   	class="simple form-control">{{ old('public_notes') ?? $recipe->public_notes }}</textarea>
   
   @error('public_notes')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
