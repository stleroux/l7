@can('category-create')
   <form action="{{ route('admin.categories.store') }}" method="POST">
      @csrf
      <input type="hidden" name="part" value="category">
      
      <div class="card card-info">

         <div class="card-header">
            <div class="card-title">Add Category</div>
            <div class="float-right">
               <button type="reset" class="btn btn-sm btn-info border">
                  <i class="{{ Config::get('icons.reset') }}"></i>
                  Reset
               </button>
               <button type="submit" class="btn btn-sm btn-primary">
                  <i class="{{ Config::get('icons.save') }}"></i>
                  Save
               </button>
            </div>
         </div>

         <div class="card-body pb-0">

            <div class="form-row">
               <div class="col-6">
                  <div class="form-group">
                     <label for="cCategory" class="required">Parent Category Name</label>
                     <select name="cCategory" id="cCategory" class="form-control form-control-sm @error('cCategory') is-invalid @enderror">
                        <option value="">Select One</option>
                        @foreach($parentCategories as $k)
                           <option value="{{ $k['id'] }}">{{ ucwords($k['name']) }}</option>
                        @endforeach
                     </select>
                     @error('cCategory')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>
               </div>

               <div class="col-6">
                  <div class="form-group">
                     <label for="cSubcategory" class="required">Sub Category Name</label>
                     <select name="cSubcategory" id="cSubcategory" class="form-control form-control-sm capitalize @error('cSubcategory') is-invalid @enderror">
                        <option value=""></option>
                     </select>
                     @error('cSubcategory')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>
               </div>

               <div class="col-6">
                  <div class="form-group">
                     <label for="cName" class="required">Category Name</label>
                     <input type="text" name="cName" class="form-control form-control-sm @error('cName') is-invalid @enderror" />
                     @error('cName')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                     <small id="HelpBlock" class="form-text text-dark">
                        Use camelCase for categories with multiple words. I.E.: fruitDishes, hotSoups
                     </small>
                  </div>
               </div>

               <div class="w-100"></div>

               <div class="col">
                  <div class="form-group">
                     <label for="cDescription">Category Description</label>
                     <input type="text" name="cDescription" class="form-control form-control-sm" />
                     <div class="pl-1 bg-danger">{{ $errors->first('cDescription') }}</div>
                  </div>
               </div>

            </div>

         </div>

         <div class="card-footer bg-secondary px-1 py-1">
            <div>Fields with <span class="required"></span> are required</div>
         </div>
      </div>
   </form>
@endcan