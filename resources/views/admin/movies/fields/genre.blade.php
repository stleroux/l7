   <!-- GENRE -->
<div class="form-group">
   <label for="category" class="required">Genre</label>
   <select name="category" id="category" value="{{ old('category') ?? $movie->category }}" class="form-control form-control-sm @error('category') is-invalid @enderror">
      @foreach($movie->categoriesOptions() as $categoryOptionKey => $categoryOptionValue)
         <option value="{{ $categoryOptionKey }}" {{ $movie->category == $categoryOptionValue ? 'selected' : '' }}>{{ $categoryOptionValue }}</option>
      @endforeach
   </select>
   
    @error('category')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   	@enderror

</div>
