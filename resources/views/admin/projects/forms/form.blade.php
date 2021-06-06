@include('common.form_submission_error')

<div class="form-row">
   <div class="col-md-6">
      @include('admin.projects.forms.fields.general')
   </div>
   <div class="col-md-6">
      @include('admin.projects.forms.fields.others')
   </div>
</div>

<!-- CARD FOOTER -->
{{-- <div class="form-row pb-2"> --}}
<div class="card-footer p-0 m-0 pb-2">
   Fields marked with an <span class="required"></span> are required
</div>
{{-- </div> --}}
