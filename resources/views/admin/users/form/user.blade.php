@if(Route::currentRouteName('') == 'admin.users.create')
   <div class="card card-primary">
@else
   <div class="card {{ ($user->account_status ? 'card-primary' : 'card-danger') }}">
@endif

   <div class="card-header">
      <div class="card-title">User Information</div>
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         <div class="col-12 col-md-6">@include('admin.users.form.fields.email', ['required'=>'required'])</div>
   		<div class="col-12 col-md-3">@include('admin.users.form.fields.first_name')</div>
      	<div class="col-12 col-md-3">@include('admin.users.form.fields.last_name')</div>
      	<div class="col-12">@include('admin.users.form.fields.notes')</div>
      </div>

   </div>

</div>
