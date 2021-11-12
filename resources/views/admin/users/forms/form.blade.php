@include('common.form_submission_error')

<div class="row">
   <div class="col-xl-6">
      @include('admin.users.forms.panels.reasonToRegister')
      @include('admin.users.forms.panels.user')
      @include('admin.users.forms.panels.contact')
      @include('admin.users.forms.panels.address')
   </div>

   <div class="col-xl-3">
      @include('admin.users.forms.panels.image')
      @include('admin.users.forms.panels.other')
      @if(Route::currentRouteName('') == 'admin.users.show' || Route::currentRouteName('') == 'admin.users.edit')
         @include('admin.users.forms.panels.login')
      @endif
   </div>

   <div class="col-xl-3">
      @include('admin.users.forms.panels.roles')
      @include('admin.users.forms.panels.password')
   </div>

</div>
