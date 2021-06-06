<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="form-row">
   <div class="col-md-6">
      <?php echo $__env->make('admin.projects.forms.fields.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
   <div class="col-md-6">
      <?php echo $__env->make('admin.projects.forms.fields.others', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
</div>

<!-- CARD FOOTER -->

<div class="card-footer p-0 m-0 pb-2">
   Fields marked with an <span class="required"></span> are required
</div>

<?php /**PATH C:\sites\l7\resources\views/admin/projects/forms/form.blade.php ENDPATH**/ ?>