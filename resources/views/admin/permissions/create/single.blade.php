@can('permission-create')
   <form action="{{ route('admin.permissions.storeSingle') }}" method="POST">
      @csrf
      <input type="hidden" name="part" value="single" />

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Permission</div>
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
                     <label for="name" class="required">Name</label>
                     <input type="text" name="name" class="form-control form-control-sm" placeholder="i.e.: Model-Permission">
                     <div class="pl-1 bg-danger">{{ $errors->first('name') }}</div>
                  </div>
               </div>

{{-- <div class="w-100"></div> --}}

               <div class="col">
                  <div class="form-group">
                     <label for="description">Description</label>
                     <input type="text" name="description" class="form-control form-control-sm">
                  </div>
               </div>
            </div>
            
         </div>
         
         <div class="card-footer bg-secondary px-1 py-1">
            {{-- <div>Fields with <i class="fa fa-star" style="color:#ff0000" aria-hidden="true"></i> are required</div> --}}
            <div>Fields with <span class="required"></span> are required</div>
         </div>
      </div>
   </form>
@endcan
