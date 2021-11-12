@if(Route::currentRouteName('') == 'admin.users.create')
   <div class="card card-primary">
@else
   <div class="card {{ ($user->account_status ? 'card-primary' : 'card-danger') }}">
@endif

   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
      Reason for Registeration Request
      {{-- </div> --}}
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         <div class="col-12">@include('admin.users.forms.fields.reasonToRegister')</div>         
      </div>

   </div>

</div>
