@include('common.form_submission_error')

<div class="card card-primary mb-2">
   <!-- CARD HEADER -->
   <div class="card-header p-2">
      General Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>
   
   <!-- CARD BODY -->
   <div class="card-body pb-0">
      <div class="form-row">
         @include('admin.materials.forms.fields.name')
         @include('admin.materials.forms.fields.type')
         @include('admin.materials.forms.fields.manufacturer')
         @include('admin.materials.forms.fields.upcCode')
         @include('admin.materials.forms.fields.notes')
      </div>
   </div>
   
   <!-- CARD FOOTER -->
   @if(Route::currentRouteName('') != 'admin.materials.show')
      <div class="card-footer p-1">
         {!! Config::get('settings.formFieldsRequired') !!}
      </div>
   @endif

</div>
