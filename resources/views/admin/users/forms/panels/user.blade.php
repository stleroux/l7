@if(Route::currentRouteName('') == 'admin.users.create')
   <div class="card card-primary">
@else
   <div class="card {{ ($user->account_status ? 'card-primary' : 'card-danger') }}">
@endif

   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
      User Information
      {{-- </div> --}}
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         <div class="col-12 col-md-6">@include('admin.users.forms.fields.email', ['required'=>'required'])</div>
         <div class="col-12 col-md-6">@include('admin.users.forms.fields.username')</div>
   		<div class="col-12 col-md-3">@include('admin.users.forms.fields.first_name', ['required'=>'required'])</div>
      	<div class="col-12 col-md-3">@include('admin.users.forms.fields.last_name', ['required'=>'required'])</div>
      	<div class="col-12">@include('admin.users.forms.fields.notes')</div>
      </div>

   </div>

</div>
