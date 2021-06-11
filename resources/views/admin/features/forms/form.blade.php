@include('common.form_submission_error')

<div class="card card-primary">

   <div class="card-header p-2">
      Feature Information
   </div>
   
   <div class="card-body pb-0">

      <div class="row">
         <div class="col">
            @include('admin.features.forms.fields.title', ['required'=>'required'])
         </div>
         <div class="col-xl-2">
            @include('admin.features.forms.fields.status')
         </div>
      </div>

      <div class="row">
         <div class="col">
            @include('admin.features.forms.fields.description', ['required'=>'required'])
         </div>
      </div>

   </div> <!-- Card body -->

   @if(Route::currentRouteName('') != 'admin.features.show')
      <div class="card-footer p-1">
         {!! Config::get('settings.formFieldsRequired') !!}
      </div>
   @endif

</div><!-- Card -->

