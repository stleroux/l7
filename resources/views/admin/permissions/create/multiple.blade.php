@can('permission-create')
   <form action="{{ route('admin.permissions.storeMultiple') }}" method="POST">
      @csrf
      <input type="hidden" name="part" value="multiple" />

      <div class="card card-info">
         <div class="card-header">
            <div class="card-title">Add Model Permissions</div>
            <div class="float-right">
               <button type="reset" class="btn btn-sm btn-info border">
                  <i class="{{ config('icons.reset') }}"></i>
                  Reset
               </button>
               <button type="submit" class="btn btn-sm btn-primary">
                  <i class="{{ config('icons.save') }}"></i>
                  Save
               </button>
            </div>
         </div>
         
         <div class="card-body pt-2">

            <div class="row">
               @include('admin.permissions.fields.modelName')
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
