@if(Route::currentRouteName('') == 'admin.users.create')
   <div class="card card-primary">
@else
   <div class="card {{ ($user->account_status ? 'card-primary' : 'card-danger') }}">
@endif

   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
      Account Information
      {{-- </div> --}}
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         <div class="col-12 col-md-3">@include('admin.users.form.fields.account_status')</div>
         @if(Route::currentRouteName('') == 'admin.users.edit')
            <div class="col-12 col-md-3">@include('admin.users.forms.fields.previous_login_date')</div>
            <div class="col-12 col-md-3">@include('admin.users.forms.fields.last_login_date')</div>
            <div class="col-12 col-md-2">@include('admin.users.forms.fields.login_count')</div>
         @endif
      </div>

   </div>

</div>
