@if(Route::currentRouteName('') == 'admin.users.create')
   {{-- <div class="card card-primary collapsed-card"> --}}
   <div class="card card-primary">
@else
   @if($errors->get('company_name'))
      <div class="card {{ ($user->account_status ? 'card-primary' : 'card-danger') }}">
   @else
      <div class="card {{ ($user->account_status ? 'card-primary collapsed-card' : 'card-danger collapsed-card') }}">
   @endif
@endif

   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
      Other Information
      {{-- </div> --}}
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse">
            @if(Route::currentRouteName('') == 'admin.users.create')
               <i class="fas fa-minus"></i>
            @else
               <i class="fas fa-plus"></i>
            @endif
         </button>
         <button type="button" class="btn btn-tool" data-card-widget="maximize">
            <i class="fas fa-expand"></i>
         </button>
      </div>
   </div>

   <div class="card-body p-2">
   	
   	<div class="form-row">
         <div class="col-12">@include('admin.users.forms.fields.public_email')</div>
         <div class="col-12">@include('admin.users.forms.fields.website')</div>
         <div class="col-12">@include('admin.users.forms.fields.invoicer_client')</div>
         <div class="col-12">@include('admin.users.forms.fields.company_name')</div>
         <div class="col-12">@include('admin.users.forms.fields.dart_doubleOut')</div>
      </div>

   </div>

</div>
