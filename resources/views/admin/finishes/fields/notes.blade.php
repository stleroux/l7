<!-- NOTES -->
<div class="col-12">
   
   <div class="form-group">
      
      <label for="name" class="">Notes</label>
      
      <textarea name="notes" id="notes" class="form-control form-control-sm">{{ old('notes') ?? $finish->notes }}</textarea>
      
      @error('notes')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
