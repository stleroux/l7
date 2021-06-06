         @include('common.form_submission_error')
<div class="row">

   <div class="col-md-3">

      <div class="card card-primary">

         <div class="card-header p-2">
            {{-- <div class="card-title"> --}}
            Role Information
            {{-- </div> --}}
         </div>


         <div class="card-body p-2">
            <div class="row">
               @include('admin.roles.forms.fields.name')
               @include('admin.roles.forms.fields.description')
            </div>

         </div> <!-- Card body -->
      </div><!-- Card -->
   </div><!-- Col -->

   <div class="col-md-9">
      @include('admin.roles.forms.fields.permissions')
   </div>

</div><!-- Row -->
