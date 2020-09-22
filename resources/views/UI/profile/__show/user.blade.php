<div class="card card-primary">

   <div class="card-header">
      <div class="card-title">User Information</div>
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         <div class="col-12 col-md-4">@include('admin.users.form.fields.email', ['required'=>'required'])</div>
   		<div class="col-12 col-md-3">@include('admin.users.form.fields.first_name', ['required'=>'required'])</div>
      	<div class="col-12 col-md-3">@include('admin.users.form.fields.last_name', ['required'=>'required'])</div>
      	<div class="col-12">@include('admin.users.form.fields.notes')</div>
      </div>

   </div>

</div>
