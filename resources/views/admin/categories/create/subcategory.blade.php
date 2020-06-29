@can('category-create')
   <form action="{{ route('admin.categories.store') }}" method="POST">
      @csrf
      <input type="hidden" name="part" value="sub">

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Sub Category</div>
            <div class="float-right">
               <button type="reset" class="btn btn-sm btn-info border">
                  <i class="fas fa-sync-alt nav-icon"></i>
                  Reset
               </button>
               <button type="submit" class="btn btn-sm btn-primary">
                  <i class="far fa-save nav-icon"></i>
                  Save
               </button>
            </div>
         </div>

         <div class="card-body pb-0">

            <div class="row">

               <div class="col-6">
                  <div class="form-group">
                     {{-- {{ Form::label('sSubs', 'Main Category', ['class'=>'required']) }} --}}
                     <label for="sSubs" class="required">Parent Category Name</label>
                     <select name="sSubs" id="sSubs" class="form-control form-control-sm">
                        <option value="">Select One</option>
                        @foreach($parentCategories as $k)
                           <option value="{{ $k['id'] }}">{{ ucwords($k['name']) }}</option>
                        @endforeach
                     </select>
                     <div class="pl-1 bg-danger">{{ $errors->first('sSubs') }} </div>
                  </div>
               </div>

               <div class="col-6">
                  <div class="form-group">
                     <label for="sName" class="required">Category Name</label>
                     <input type="text" name="sName" class="form-control form-control-sm">
                     <div class="pl-1 bg-danger">{{ $errors->first('sName') }}</div>
                  </div>
               </div>

   {{--             <div class="col-3">
                  <div class="form-group">
                     <label for="sValue">Value</label>
                     <input type="text" name="sValue" class="form-control form-control-sm" placeholder="See Category Help for details." />
                  </div>
               </div> --}}

               <div class="w-100"></div>

               <div class="col">
                  <div class="form-group">
                     <label for="sDescription">Category Description</label>
                     <input type="text" name="sDescription" class="form-control form-control-sm">
                  </div>
               </div>

            </div>

         </div>

         <div class="card-footer bg-secondary px-1 py-1">
            <div>Fields with <i class="fa fa-star" style="color:#ff0000" aria-hidden="true"></i> are required</div>
         </div>
      </div>
   </form>
@endcan
