<div class="card card-primary">

   <div class="card-header">
      <div class="card-title">Account Information</div>
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         <div class="col-12 col-md-2">@include('admin.users.form.fields.account_status')</div>
         @if(Route::currentRouteName('') == 'admin.users.edit')
            <div class="col-12 col-md-3">@include('admin.users.form.fields.previous_login_date')</div>
            <div class="col-12 col-md-3">@include('admin.users.form.fields.last_login_date')</div>
            <div class="col-12 col-md-3">@include('admin.users.form.fields.login_count')</div>
         @endif
      </div>

   </div>

</div>
