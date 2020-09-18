{{-- Account Info --}}
<div class="card card-trans-2 mb-2">

   <div class="card-header bg-primary p-2">
      Account Information
   </div>

   <div class="card-body section_body p-2">
      <div class="form-row">
         @include('admin.users.form.fields.previous_login_date', ['label'=>'Previous Login'])
         @include('admin.users.form.fields.last_login_date')
         @include('admin.users.form.fields.login_count')
      </div>
   </div>
</div>