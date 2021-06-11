<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card card-primary mb-2">
   <!-- CARD HEADER -->
   <div class="card-header p-2">
      General Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>
   
   <!-- CARD BODY -->
   <div class="card-body pb-0">
      <div class="form-row">
         <?php echo $__env->make('admin.materials.forms.fields.name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.materials.forms.fields.type', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.materials.forms.fields.manufacturer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.materials.forms.fields.upcCode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.materials.forms.fields.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
   </div>
   
   <!-- CARD FOOTER -->
   <?php if(Route::currentRouteName('') != 'admin.materials.show'): ?>
      <div class="card-footer p-1">
         <?php echo Config::get('settings.formFieldsRequired'); ?>

      </div>
   <?php endif; ?>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/materials/forms/form.blade.php ENDPATH**/ ?>