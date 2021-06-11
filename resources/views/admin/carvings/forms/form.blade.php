@include('common.form_submission_error')

<div class="card">

   <div class="card-body p-0">
   
      <div class="form-row">

         <div class="col-md-6">
            @include('admin.carvings.forms.fields.general')
         </div>

         <div class="col-md-6">
            @include('admin.carvings.forms.fields.others')
         </div>

      </div>

   </div>

   @if(Route::currentRouteName('') != 'admin.carvings.show')
      <!-- CARD FOOTER -->
      <div class="card-footer pt-1 pb-1 pl-2">
         {!! Config::get('settings.formFieldsRequired') !!}
      </div>
   @endif

</div>
