@if(Route::currentRouteName('') == 'admin.users.create')
   <div class="card card-primary collapsed-card">
@else
   @if($errors->get('telephone'))
      <div class="card {{ ($user->account_status ? 'card-primary' : 'card-danger') }}">
   @else
      <div class="card {{ ($user->account_status ? 'card-primary collapsed-card' : 'card-danger collapsed-card') }}">
   @endif
@endif

   <div class="card-header">
      <div class="card-title">Contact Information</div>
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
   		<div class="col-12 col-md-3">@include('admin.users.forms.fields.telephone')</div>
         <div class="col-12 col-md-3">@include('admin.users.forms.fields.cell')</div>
         <div class="col-12 col-md-3">@include('admin.users.forms.fields.fax')</div>
      </div>

   </div>

</div>
