{{-- Profile Info --}}
<div class="card card-trans-2 mb-2">
   <div class="card-header bg-primary p-2">Profile Info</div>
   <div class="card-body p-2">
      <div class="form-row">
         <div class="col-md-3">
            @include('admin.users.form.fields.first_name', ['required'=>'required'])
         </div>
         <div class="col-md-3">
            <div class="form-group">
               @include('admin.users.form.fields.last_name', ['required'=>'required'])
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               @include('admin.users.form.fields.email', ['required'=>'required'])
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.form.fields.public_email')
            </div>
         </div>
      </div>

      <div class="form-row">
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.form.fields.telephone')
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.form.fields.cell')
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.form.fields.fax')
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-group">
               @include('admin.users.form.fields.website')
            </div>
         </div>
      </div>

      <div class="form-row">

         @if($user->invoicer_client != 0)
            <div class="col-md-2">
               <div class="form-group">
                  @include('admin.users.form.fields.invoicer_client', ['readonly'=>'readonly'])
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  @include('admin.users.form.fields.company_name', ['required'=>'required'])
               </div>
            </div>
         @endif

         @if($user->dart_doubleOut > 0)
            <div class="col-md-2">
               <div class="form-group">
                  @include('admin.users.form.fields.dart_doubleOut')
               </div>
            </div>
         @endif
         
      </div>
      
   </div>
</div>
