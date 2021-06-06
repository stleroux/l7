@if(Route::currentRouteName('') == 'admin.users.create')
   {{-- <div class="card card-primary collapsed-card"> --}}
   <div class="card card-primary">
@else
   @if($errors->get('telephone'))
      <div class="card {{ ($user->account_status ? 'card-primary' : 'card-danger') }}">
   @else
      <div class="card {{ ($user->account_status ? 'card-primary collapsed-card' : 'card-danger collapsed-card') }}">
   @endif
@endif

   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
      Contact Information
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
   		<div class="col-12 col-md-4">@include('admin.users.forms.fields.telephone')</div>
         <div class="col-12 col-md-4">@include('admin.users.forms.fields.cell')</div>
         <div class="col-12 col-md-4">@include('admin.users.forms.fields.fax')</div>
      </div>

   </div>

</div>
