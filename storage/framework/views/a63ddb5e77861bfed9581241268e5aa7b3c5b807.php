<div class="form-row">
   <div class="col-md-6">
      <?php echo $__env->make('admin.projects.forms.fields.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
   <div class="col-md-6">
      <?php echo $__env->make('admin.projects.forms.fields.others', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
</div>

<!-- CARD FOOTER -->
<div class="card-footer pt-1 pb-1 pl-2">
   Fields marked with an <span class="required"></span> are required
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/forms/form.blade.php ENDPATH**/ ?>