{{-- Account Info --}}
<div class="card card-trans-2 mb-2">

   <div class="card-header bg-primary p-2">
      Account Information
   </div>

   <div class="card-body p-2">
      @include('UI.profile.forms.fields.username')
      @include('admin.users.forms.fields.previous_login_date', ['label'=>'Previous Login', 'disabled'=>'disabled'])
      @include('admin.users.forms.fields.last_login_date', ['disabled'=>'disabled'])
      @include('admin.users.forms.fields.login_count', ['disabled'=>'disabled'])
   </div>
</div>