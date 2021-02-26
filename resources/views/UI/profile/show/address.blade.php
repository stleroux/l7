{{-- Address Info --}}

<div class="card card-trans-2 mb-2 collapsed-card">
   
   <div class="card-header bg-primary p-2">
      <div class="card-title">Address Info</div>
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-plus"></i>
         </button>
      </div>
   </div>

   <div class="card-body section_body p-2">
      <div class="form-row">
         <div class="col-md-4">
            <div class="form-group">
               @include('admin.users.forms.fields.address_1', ['disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               @include('admin.users.forms.fields.address_2', ['disabled'=>'disabled'])
            </div>
         </div>
      </div>

      <div class="form-row">
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.forms.fields.city', ['disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.forms.fields.province', ['disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.forms.fields.postal_code', ['disabled'=>'disabled'])
            </div>
         </div>
      </div>
   </div>

</div>

