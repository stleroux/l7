@include('common.form_submission_error')

<div class="card card-primary">

   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
      Block Information
      {{-- </div> --}}
   </div>

   <div class="card-body pb-0">
      
      <div class="form-row">
         <div class="col-12 col-xl-8">
            @include('admin.blocks.forms.fields.title', ['required'=>'required'])
         </div>
         <div class="col-12 col-xl-2">
            @include('admin.blocks.forms.fields.page')
         </div>
         <div class="col-12 col-xl-2">
            @include('admin.blocks.forms.fields.name')
         </div>
      </div>
      
      <div class="form-row">
         <div class="col-12">
            @include('admin.blocks.forms.fields.description', ['required'=>'required'])
         </div>
      </div>
      
   </div> <!-- Card body -->

   @if(Route::currentRouteName('') != 'admin.blocks.show')
      <div class="card-footer p-1">
         {!! Config::get('settings.formFieldsRequired') !!}
      </div>
   @endif
   
</div><!-- Card -->
