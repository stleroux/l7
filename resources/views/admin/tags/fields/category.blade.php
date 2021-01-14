<!-- CATEGORY -->

<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="category" class="">Model Name</label>
      
      <select name="category" id="category" class="form-control form-control-sm @error('category') is-invalid @enderror">
         @foreach($tag->categoryOptions() as $categoryOptionKey => $categoryOptionValue)
            <option value="{{$categoryOptionKey}}" {{ $tag->category == $categoryOptionValue ? 'selected' : '' }}>{{ $categoryOptionValue }}</option>
         @endforeach
      </select>
      
      @error('category')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
