<!-- DESCRIPTION -->
<div class="form-group col-12">

   <label for="description" class="col-form-label">Description</label>

   <textarea id="description" name="description" rows="4" class="form-control @error('description') is-invalid @enderror" value="{{ old('description' ?? $role->description) }}"></textarea>
   
   @error('description')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
