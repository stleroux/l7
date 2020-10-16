@if(Route::currentRouteName('') == 'admin.users.create')
	<div class="card card-info">
@else
	<div class="card {{ ($user->account_status ? 'card-info' : 'card-danger') }}">
@endif

   <div class="card-header">
      <div class="card-title">Password</div>
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         <div class="col-12">@include('admin.users.form.fields.password')</div>
      </div>

   </div>

</div>
