<!-- CATEGORY -->

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
   
   <div class="form-group">
      
      <label for="category" class="required">Category</label>
      
      <select
         name="category"
         value="{{ old('category') ?? $carving->category }}"
         id="category"
         class="form-control form-control-sm @error('category') is-invalid @enderror">
         @foreach($carving->categoriesOptions() as $categoryOptionKey => $categoryOptionValue)
            <option value="{{ $categoryOptionKey }}" {{ $carving->category == $categoryOptionValue ? 'selected' : '' }}>{{ $categoryOptionValue }}</option>
         @endforeach
      </select>
      
      @error('category')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
