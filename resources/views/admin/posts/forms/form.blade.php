@include('common.form_submission_error')

<div class="card card-primary card-outline card-outline-tabs">
   
   <div class="card-header p-0 border-bottom-0">
      @include('admin.posts.forms.tabs')
   </div>

   <div class="card-body">
      <div class="tab-content" id="recipe-tabContent">
         @include('admin.posts.forms.tabs.general')
         @include('admin.posts.forms.tabs.notes')
         @include('admin.posts.forms.tabs.image')
         @include('admin.posts.forms.tabs.information')
         @include('admin.posts.forms.tabs.settings')
      </div>
   </div>
   <!-- /.card -->
</div>
