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
         <?php echo $__env->make('admin.materials.forms.fields.name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.materials.forms.fields.type', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.materials.forms.fields.manufacturer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.materials.forms.fields.upcCode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.materials.forms.fields.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
   </div>
   <!-- CARD FOOTER -->
   <div class="card-footer card_footer p-1">
      Fields marked with an <span class="required"></span> are required
   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/materials/forms/form.blade.php ENDPATH**/ ?>