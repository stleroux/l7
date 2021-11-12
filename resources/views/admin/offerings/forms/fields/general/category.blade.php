<!-- CATEGORY -->

<div class="col-xs-12 col-sm-4 col-md-2">
   
   <div class="form-group">
      
      <label for="category" class="required">
         Category
      </label>

      @if(Route::currentRouteName('') == 'admin.offerings.show')

         <div class="p-1 m-0 bg-gray-light">
            {!! $offering->category > 0 ? $offering->category : 'Parent' !!}
         </div>

      @else
      
         <select
            name="category"
            value="{{ old('category') ?? $offering->category }}"
            id="category"
            class="form-control form-control-sm @error('category') is-invalid @enderror">
{{--             @foreach($offering->categoriesOptions() as $categoryOptionKey => $categoryOptionValue)
               <option value="{{ $categoryOptionKey }}" {{ $offering->category == $categoryOptionValue ? 'selected' : '' }}>{{ $categoryOptionValue }}</option>
            @endforeach --}}
            <option value="">Select One</option>
            {{-- <option value="0">Parent</option> --}}
            @foreach ($categories as $category)
               <option value="{{ $category->id }}" {{ $offering->category === $category->id ? 'selected' : '' }} >{{ ucwords($category->name) }}</option>
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
