<!-- DESCRIPTION -->

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   
   <div class="form-group">
      
      <label for="description" class="required">Carving Description</label>
      
      <textarea name="description" id="description" rows="3" class="form-control form-control-sm @error('description') is-invalid @enderror">{{ old('description') ?? $carving->description }}</textarea>
      
      @error('description')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
