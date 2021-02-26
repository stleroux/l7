{{-- Profile Info --}}
<div class="card card-trans-2 mb-2">
   <div class="card-header bg-primary p-2">Profile Info</div>
   <div class="card-body p-2">
      <div class="form-row">
         <div class="col-md-3">
            @include('admin.users.forms.fields.first_name', ['required'=>'required', 'disabled'=>'disabled'])
         </div>
         <div class="col-md-3">
            <div class="form-group">
               @include('admin.users.forms.fields.last_name', ['required'=>'required', 'disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               @include('admin.users.forms.fields.email', ['required'=>'required', 'disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.forms.fields.public_email', ['disabled'=>'disabled'])
            </div>
         </div>
      </div>

      <div class="form-row">
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.forms.fields.telephone', ['disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.forms.fields.cell', ['disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.forms.fields.fax', ['disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-group">
               @include('admin.users.forms.fields.website', ['disabled'=>'disabled'])
            </div>
         </div>
      </div>

      <div class="form-row">

         @if($user->invoicer_client)
            <div class="col-md-6">
               <div class="form-group">
                  @include('admin.users.forms.fields.company_name', ['disabled'=>'disabled'])
               </div>
            </div>
         @endif
         
         @if($user->dart_doubleOut)
            <div class="col-md-2">
               <div class="form-group">
                  @include('admin.users.forms.fields.dart_doubleOut', ['disabled'=>'disabled'])
               </div>
            </div>
         @endif
         
      </div>
      
   </div>
</div>
