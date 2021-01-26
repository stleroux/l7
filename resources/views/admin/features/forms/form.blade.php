<div class="row">

   <div class="col">

      <div class="card card-primary">

         <div class="card-header">
            <div class="card-title">Feature Information</div>
         </div>
         <div class="card-body">
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
      </div><!-- Card -->
   </div><!-- Col -->

</div><!-- Row -->
