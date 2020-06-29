@can('permission-create')
   <form action="{{ route('admin.permissions.storeMultiple') }}" method="POST">
      @csrf
      <input type="hidden" name="part" value="multiple" />

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Model Permissions</div>
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
                     <label for="modelName" class="required">Model Name</label>
                     <input type="text" name="modelName" class="form-control form-control-sm" placeholder="Model Name">
                     <div class="pl-1 bg-danger">{{ $errors->first('modelName') }}</div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col">
                  <table class="table table-sm" id="permissions">
                     <thead>
                        <tr>
                           <th class="required">Permission Name</th>
                           <th>Permission Description</th>
                           <th class="text-center">
                              <a href="#" class="btn btn-sm btn-info addRow">
                                 <i class="far fa-plus-square"></i>
                              </a>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        {{-- <tr>
                           <td>
                              <input type="text" name="permName[]" class="form-control form-control-sm" placeholder="Permission Name">
                              <div class="pl-1 bg-danger">{{ $errors->first('permName') }}</div>
                           </td>
                           <td><input type="text" name="permDescription[]" class="form-control form-control-sm"></td>
                           <td class="text-center">
                              <a href="#" class="btn btn-sm btn-danger remove">
                                 <i class="far fa-minus-square"></i>
                              </a>
                           </td>
                        </tr> --}}
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         
         <div class="card-footer bg-secondary px-1 py-1">
            <div>Fields with <i class="fa fa-star" style="color:#ff0000" aria-hidden="true"></i> are required</div>
         </div>
      </div>
   </form>
@endcan
