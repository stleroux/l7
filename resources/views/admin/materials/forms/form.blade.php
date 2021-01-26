<div class="card mb-2">
   <!-- CARD HEADER -->
   <div class="card-header py-1">
      General Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>
   <!-- CARD BODY -->
   <div class="card-body p-3">
      <div class="form-row">
         @include('admin.materials.forms.fields.name')
         @include('admin.materials.forms.fields.type')
         @include('admin.materials.forms.fields.manufacturer')
         @include('admin.materials.forms.fields.upcCode')
         @include('admin.materials.forms.fields.notes')
      </div>
   </div>
   <!-- CARD FOOTER -->
   <div class="card-footer card_footer p-1">
      Fields marked with an <span class="required"></span> are required
   </div>

</div>
