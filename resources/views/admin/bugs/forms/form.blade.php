<div class="card card-primary">

   <div class="card-header">
      <div class="card-title">Bug Information</div>
   </div>

   <div class="card-body">
      
      <div class="row">
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
      
      <div class="row">
         <div class="col-12">
            @include('admin.bugs.forms.fields.description', ['required'=>'required'])
         </div>
      </div>
      
      <div class="row">
         <div class="col-12">
            @include('admin.bugs.forms.fields.resolution')
         </div>
      </div>

   </div> <!-- Card body -->
   
</div><!-- Card -->
