<div class="form-row">

   <div class="col-md-6">
      <?php echo $__env->make('admin.carvings.forms.fields.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>

   <div class="col-md-6">
      <?php echo $__env->make('admin.carvings.forms.fields.others', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/forms/form.blade.php ENDPATH**/ ?>