{{-- GENERAL INFORMATION --}}
<div class="card mb-2 card-primary">
   <div class="card-header p-2">
      General Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>
   <div class="card-body p-2">

      <div class="form-row pt-2">
         @include('admin.carvings.forms.fields.general.name')
         @include('admin.carvings.forms.fields.general.category')
      </div>
      
      <div class="form-row">
         @include('admin.carvings.forms.fields.general.description')
      </div>
      
      <div class="form-row">
         @include('admin.carvings.forms.fields.general.tags')
      </div>
      
   </div>
</div>
