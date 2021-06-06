{{-- OTHER INFORMATION --}}
<div class="card mb-2 card-primary">
   <div class="card-header p-2">
      Other Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>
   <div class="card-body p-2">

      <div class="form-row p-1 bg-secondary">
         Dimensions
      </div>

      <div class="form-row pb-2">
         @include('admin.carvings.forms.fields.others.width')
         @include('admin.carvings.forms.fields.others.height')
         @include('admin.carvings.forms.fields.others.depth')
         @include('admin.carvings.forms.fields.others.weight')
      </div>
      
      <div class="form-row p-1 bg-secondary">
         Times
      </div>

      <div class="form-row pb-2">
         @include('admin.carvings.forms.fields.others.designTimeHrs')
         @include('admin.carvings.forms.fields.others.designTimeMins')
         @include('admin.carvings.forms.fields.others.machineTimeHrs')
         @include('admin.carvings.forms.fields.others.machineTimeMins')
      </div>
      
      <div class="form-row p-1 bg-secondary">
         Other
      </div>

      <div class="form-row pb-2">
         @include('admin.carvings.forms.fields.others.completed')
         @include('admin.carvings.forms.fields.others.price')
         @include('admin.carvings.forms.fields.others.jobSheet')
      </div>

   </div>
</div>