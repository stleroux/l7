<!-- CATEGORY -->

<div class="form-group">

   <label for="category_id" class="{{ $required ?? '' }}">
      {{ $label ?? 'Category' }}
   </label>
   
   <select name="category_id" id="category_id" class="form-control form-control-sm @error('category_id') is-invalid @enderror">
      <option value="0">Select</option>
      @foreach ($categories as $category)
         <option disabled>{{ ucfirst($category->name) }}</option>
         @foreach ($category->children as $children)
            <option value="{{ $children->id }}" {{ ($recipe->category_id == $children->id ) ? 'selected' : '' }}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- {{ ucfirst($children->name) }}</option>
         @endforeach
      @endforeach
   </select>
   
   @error('category_id')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div>
