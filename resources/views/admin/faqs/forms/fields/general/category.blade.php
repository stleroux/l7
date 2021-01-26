<!-- CATEGORY -->

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
   
   <div class="form-group">
      
      <label for="category" class="required">Category</label>

      @if(Route::currentRouteName('') == 'admin.faqs.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $faq->category !!}
         </div>

      @else
      
         <select
            name="category"
            value="{{ old('category') ?? $faq->category }}"
            id="category"
            class="form-control form-control-sm @error('category') is-invalid @enderror">
            @foreach($faq->categoriesOptions() as $categoryOptionKey => $categoryOptionValue)
               <option value="{{ $categoryOptionKey }}" {{ $faq->category == $categoryOptionValue ? 'selected' : '' }}>{{ $categoryOptionValue }}</option>
            @endforeach
         </select>

      @endif
      
      @error('category')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>
   
</div>
