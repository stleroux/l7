<!-- DESCRIPTION -->
<div class="form-group col-12">
   <label for="description" class="col-form-label">Description</label>
   <input type="text" id="description" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" >
   @error('description')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror
</div>
