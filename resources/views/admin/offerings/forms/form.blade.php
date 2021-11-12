@include('common.form_submission_error')

{{-- GENERAL INFORMATION --}}
<div class="card card-primary">

   <div class="card-header p-2">
      General Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>

   <div class="card-body pb-0">

      <div class="form-row">
         @include('admin.offerings.forms.fields.general.name')
         @include('admin.offerings.forms.fields.general.category')
         {{-- @include('admin.offerings.forms.fields.general.is_published') --}}
      </div>
      
      <div class="form-row">
         {{-- @include('admin.offerings.forms.fields.general.answer') --}}
      </div>
      
      {{-- <div class="form-row">
         @include('admin.offerings.forms.fields.general.tags')
      </div> --}}
      
   </div>

   @if(Route::currentRouteName('') != 'admin.offerings.show')
      <div class="card-footer p-1">
         {!! Config::get('settings.formFieldsRequired') !!}
      </div>
   @endif


</div>
