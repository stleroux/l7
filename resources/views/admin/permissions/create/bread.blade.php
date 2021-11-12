@can('permission-create')
   <form action="{{ route('admin.permissions.storeBread') }}" method="POST">
      @csrf
      <input type="hidden" name="part" value="multiple" />

      <div class="card card-info">

         <div class="card-header">
            <div class="card-title">Add Model Permissions (BREAD)</div>
            <div class="float-right">
               @include('admin.permissions.actions.common.reset')
               @include('admin.permissions.actions.common.save')
            </div>
         </div>
         
         {{-- @include('common.form_submission_error') --}}
         
         <div class="card-body pt-2">

            <div class="row">
               {{-- @include('admin.permissions.forms.fields.modelName') --}}
               <div class="col-6">

   <div class="form-group">

      <label for="modelNameBread" class="required">Model Name</label>

      <input
         type="text"
         name="modelNameBread"
         class="form-control form-control-sm @error('modelNameBread') is-invalid @enderror"
         placeholder="Model Name">

      @error('modelNameBread')
         <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
         </span>
      @enderror

   </div>

</div>
            </div>

            {{-- <div class="row">
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
            </div> --}}

         </div>
         
         @if(Route::currentRouteName('') != 'admin.permissions.show')
            <div class="card-footer p-1">
               {!! Config::get('settings.formFieldsRequired') !!}
            </div>
         @endif
         
      </div>
   </form>
@endcan
