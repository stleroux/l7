@if(Route::currentRouteName('') == 'admin.users.create')
	<div class="card card-info">
@else
	<div class="card {{ ($user->account_status ? 'card-info' : 'card-danger') }}">
@endif

   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
      Password
      {{-- </div> --}}
   </div>

   <div class="card-body p-2">
   	
   	<div class="form-row">
         <div class="col-12">@include('admin.users.forms.fields.password')</div>
      </div>

   </div>

</div>
