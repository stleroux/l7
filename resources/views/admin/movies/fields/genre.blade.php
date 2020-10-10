   <!-- GENRE -->
<div class="form-group">
   <label for="category" class="required">Genre</label>
   <select name="category" value="{{ old('category') ?? $movie->category }}" id="category" class="form-control form-control-sm">
      @foreach($movie->categoriesOptions() as $categoryOptionKey => $categoryOptionValue)
         <option value="{{ $categoryOptionKey }}" {{ $movie->category == $categoryOptionValue ? 'selected' : '' }}>{{ $categoryOptionValue }}</option>
      @endforeach
   </select>
   <div class="pl-1 bg-danger">{{ $errors->first('category') }}</div>
</div>
