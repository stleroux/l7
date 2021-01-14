{{-- OTHER INFORMATION --}}
<div class="card mb-2">
   <div class="card-header py-1">
      Other Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>
   <div class="card-body p-3">

      <div class="form-row pb-2">
         @include('admin.carvings.fields.others.width')
         @include('admin.carvings.fields.others.depth')
         @include('admin.carvings.fields.others.height')
         @include('admin.carvings.fields.others.weight')
      </div>
      
      <div class="form-row pb-2">
         @include('admin.carvings.fields.others.completed')
         @include('admin.carvings.fields.others.price')
         @include('admin.carvings.fields.others.shopTime')
      </div>

   </div>
</div>