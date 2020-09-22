@if($errors->get('company_name'))
   <div class="card card-primary">
@else
   <div class="card card-primary collapsed-card">
@endif

   <div class="card-header">
      <div class="card-title">Other Information</div>
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-plus"></i>
         </button>
         <button type="button" class="btn btn-tool" data-card-widget="maximize">
            <i class="fas fa-expand"></i>
         </button>
      </div>
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         <div class="col-12">@include('admin.users.form.fields.public_email')</div>
         <div class="col-12">@include('admin.users.form.fields.website')</div>
         <div class="col-12">@include('admin.users.form.fields.invoicer_client')</div>
         <div class="col-12">@include('admin.users.form.fields.company_name')</div>
         <div class="col-12">@include('admin.users.form.fields.dart_doubleOut')</div>
      </div>

   </div>

</div>
