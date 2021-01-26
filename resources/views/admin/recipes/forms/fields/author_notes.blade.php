<!-- AUTHOR NOTES -->
   
<div class="form-group">
   
   <label for="author_notes" class="col-form-label {{ $required ?? '' }}">Author Notes <small>(Not shown to public)</small></label>
   
   <textarea
   	name="author_notes"
   	id="author_notes"
   	rows="2"
   	cols=""
   	class="simple form-control">{{ old('author_notes') ?? $recipe->author_notes }}</textarea>
   
   @error('author_notes')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
