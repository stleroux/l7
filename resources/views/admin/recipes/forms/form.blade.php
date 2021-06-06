@include('common.form_submission_error')

<div class="card card-primary card-outline card-outline-tabs">
   
   <div class="card-header p-0 border-bottom-0">
      @include('admin.recipes.forms.tabs')
   </div>

   <div class="card-body">
      <div class="tab-content" id="recipe-tabContent">
         @include('admin.recipes.forms.tabs.general')
         @include('admin.recipes.forms.tabs.notes')
         @include('admin.recipes.forms.tabs.image')
         @include('admin.recipes.forms.tabs.information')
         @include('admin.recipes.forms.tabs.settings')
      </div>
   </div>
   <!-- /.card -->
</div>
