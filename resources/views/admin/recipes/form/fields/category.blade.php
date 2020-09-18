<!-- CATEGORY -->

<div class="form-group">

   <label for="category_id" class="{{ $required ?? '' }}">
      {{ $label ?? 'Category' }}
   </label>
   
   <select name="category_id" id="catSelect" class="form-control form-control-sm">
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
