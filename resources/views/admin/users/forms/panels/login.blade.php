@if(Route::currentRouteName('') == 'admin.users.create')
   <div class="card card-primary collapsed-card">
@else
   @if($errors->get('company_name'))
      <div class="card {{ ($user->account_status ? 'card-primary' : 'card-danger') }}">
   @else
      <div class="card {{ ($user->account_status ? 'card-primary collapsed-card' : 'card-danger collapsed-card') }}">
   @endif
@endif

   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
      Login Information
      {{-- </div> --}}
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-plus"></i>
         </button>
         <button type="button" class="btn btn-tool" data-card-widget="maximize">
            <i class="fas fa-expand"></i>
         </button>
      </div>
   </div>

   <div class="card-body p-2">
   	
   	<div class="form-row">
         <div class="col-12">@include('admin.users.forms.fields.last_login_date')</div>
         <div class="col-12">@include('admin.users.forms.fields.login_count')</div>
         <div class="col-12">@include('admin.users.forms.fields.previous_login_date')</div>
      </div>

   </div>

</div>
