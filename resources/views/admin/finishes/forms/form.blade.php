@include('common.form_submission_error')

<div class="card card-primary mb-2">
   <!-- CARD HEADER -->
   <div class="card-header p-2">
      General Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>
   
   <!-- CARD BODY -->
   <div class="card-body p-3">
      <div class="form-row">
         @include('admin.finishes.forms.fields.name')
         @include('admin.finishes.forms.fields.colorName')
         @include('admin.finishes.forms.fields.colorCode')
         @include('admin.finishes.forms.fields.sheen')
         @include('admin.finishes.forms.fields.type')
         @include('admin.finishes.forms.fields.manufacturer')
         @include('admin.finishes.forms.fields.upcCode')
         @include('admin.finishes.forms.fields.notes')
      </div>
   </div>
   <!-- CARD FOOTER -->
   <div class="card-footer card_footer p-1">
      Fields marked with an <span class="required"></span> are required
   </div>

</div>
