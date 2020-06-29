@can('category-create')
   <form action="{{ route('admin.categories.store') }}" method="POST">
      @csrf
      <input type="hidden" name="part" value="main" />

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Parent Category</div>
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
                     <label for="mName" class="required">Category Name</label>
                     <input type="text" name="mName" class="form-control form-control-sm">
                     <div class="pl-1 bg-danger">{{ $errors->first('mName') }}</div>
                  </div>
               </div>

               {{-- <div class="col">
                  <div class="form-group">
                     <label for="mValue">Value</label>
                     <input type="text" name="mValue" class="form-control form-control-sm" placeholder="See Category Help for details.">
                  </div>
               </div> --}}

               <div class="w-100"></div>

               <div class="col">
                  <div class="form-group">
                     <label for="mDescription">Category Description</label>
                     <input type="text" name="mDescription" class="form-control form-control-sm">
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
