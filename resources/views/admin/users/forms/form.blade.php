<div class="row">
   <div class="col-xl-6">
      @include('admin.users.forms.panels.user')
      @include('admin.users.forms.panels.contact')
      @include('admin.users.forms.panels.address')
   </div>

   <div class="col-xl-3">
      @include('admin.users.forms.panels.image')
      @include('admin.users.forms.panels.other')
   </div>

   <div class="col-xl-3">
      @include('admin.users.forms.panels.roles')
      @include('admin.users.forms.panels.password')
   </div>

</div>
