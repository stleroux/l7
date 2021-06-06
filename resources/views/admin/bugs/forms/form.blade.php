@include('common.form_submission_error')

<div class="card card-primary">

   <div class="card-header p-2">
      {{-- <div class="card-title"> --}}
      Bug Information
      {{-- </div> --}}
   </div>

   <div class="card-body p-2">
      
      <div class="form-row">
         <div class="col-12 col-xl-5">
            @include('admin.bugs.forms.fields.title', ['required'=>'required'])
         </div>
         <div class="col-12 col-xl-5">
            @include('admin.bugs.forms.fields.page_url')
         </div>
         <div class="col-12 col-xl-2">
            @include('admin.bugs.forms.fields.status')
         </div>
      </div>
      
      <div class="form-row">
         <div class="col-12">
            @include('admin.bugs.forms.fields.description', ['required'=>'required'])
         </div>
      </div>
      
      <div class="form-row">
         <div class="col-12">
            @include('admin.bugs.forms.fields.resolution')
         </div>
      </div>

   </div> <!-- Card body -->
   
</div><!-- Card -->
