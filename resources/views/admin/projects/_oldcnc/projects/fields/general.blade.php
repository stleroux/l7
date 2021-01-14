{{-- GENERAL INFORMATION --}}
<div class="card mb-2">
   <div class="card-header py-1">
      General Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>
   <div class="card-body p-3">

      <div class="form-row pt-2">
         @include('admin.projects.projects.fields.general.name')
         @include('admin.projects.projects.fields.general.category')
      </div>
      
      <div class="form-row">
         @include('admin.projects.projects.fields.general.description')
      </div>
      
   </div>
</div>
