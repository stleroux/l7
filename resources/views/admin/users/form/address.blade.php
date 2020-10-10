@if(
   $errors->get('address_1') ||
   $errors->get('city') ||
   $errors->get('province') ||
   $errors->get('postal_code'))
   <div class="card {{ ($user->account_status ? 'card-primary' : 'card-danger') }}">
@else
   <div class="card {{ ($user->account_status ? 'card-primary collapsed-card' : 'card-danger collapsed-card') }}">
@endif

   <div class="card-header">
      <div class="card-title">Address Information</div>
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
         <div class="col-12 col-md-6">@include('admin.users.form.fields.address_1')</div>
         <div class="col-12 col-md-6">@include('admin.users.form.fields.address_2')</div>
         <div class="col-12 col-md-2">@include('admin.users.form.fields.city')</div>
         <div class="col-12 col-md-2">@include('admin.users.form.fields.province')</div>
         <div class="col-12 col-md-3">@include('admin.users.form.fields.postal_code')</div>
      </div>

   </div>

</div>
