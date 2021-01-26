@can('category-create')
   <form action="{{ route('admin.categories.store') }}" method="POST">
      @csrf
      <input type="hidden" name="part" value="main" />

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Parent Category</div>
            <div class="float-right">
               @include('admin.categories.actions.common.reset')
               @include('admin.categories.actions.common.save')
            </div>
         </div>
         
         <div class="card-body pb-0">

            <div class="row">
               <div class="col-6">
                  <div class="form-group">
                     <label for="mName" class="required">Category Name</label>
                     <input type="text" name="mName" class="form-control form-control-sm @error('mName') is-invalid @enderror">
                     @error('mName')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>
               </div>

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
            <div>Fields with <span class="required"></span> are required</div>
         </div>
      </div>
   </form>
@endcan
