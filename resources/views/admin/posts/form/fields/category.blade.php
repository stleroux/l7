<!-- CATEGORY -->

{{-- <div class="form-group">

   <label for="category_id" class="{{ $required ?? '' }}">
      {{ $label ?? 'Category' }}
   </label>
   
   <select name="category_id" id="catSelect" class="form-control form-control-sm">
      @foreach ($categories as $category)
         <option disabled>{{ ucfirst($category->name) }}</option>
         @foreach ($category->children as $children)
            <option value="{{ $children->id }}" {{ ($post->category_id == $children->id ) ? 'selected' : '' }}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- {{ ucfirst($children->name) }}</option>
         @endforeach
      @endforeach
   </select>
   
   @error('category_id')
      <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
      </span>
   @enderror

</div> --}}


   {{-- <div class="col-12 col-sm-6 col-md-3"> --}}
      <div class="form-group">
         {{-- {!! Form::label('category_id', 'Category', ['class'=>'required']) !!} --}}
         <label for="category_id" class="required">Category</label>
         <select name="category_id" id="category_id" class="form-control form-control-sm">
            @if(last(request()->segments()) === 'create')
               <option value="" selected>Select One</option>
            @endif
            @foreach ($categories as $category)
               @if(last(request()->segments()) === 'create')
                  <option disabled>{{ ucfirst($category->name) }}</option>
               @endif
               @foreach ($category->children as $children)
                  @if(last(request()->segments()) === 'create')
                     <option value="{{ $children->id}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- {{ ucfirst($children->name) }}</option>
                  @endif
                  @if(last(request()->segments()) === 'edit')
                     <option value="{{ $children->id }}" {{ ($post->category_id == $children->id ) ? 'selected' : '' }}>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- {{ ucfirst($children->name) }}</option>
                  @endif
               @endforeach
            @endforeach
         </select>
         <div class="pl-1 bg-danger">{{ $errors->first('category_id') }}</div>
      </div>
   {{-- </div> --}}