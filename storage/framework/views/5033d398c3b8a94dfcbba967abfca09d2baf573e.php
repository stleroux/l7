<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="card card-primary">

   <div class="card-header p-2">
      General Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>

   <div class="card-body pb-0">

      <div class="form-row">
         <?php echo $__env->make('admin.offerings.forms.fields.general.name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.offerings.forms.fields.general.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         
      </div>
      
      <div class="form-row">
         
      </div>
      
      
      
   </div>

   <?php if(Route::currentRouteName('') != 'admin.offerings.show'): ?>
      <div class="card-footer p-1">
         <?php echo Config::get('settings.formFieldsRequired'); ?>

      </div>
   <?php endif; ?>


</div>
<?php /**PATH C:\sites\l7\resources\views/admin/offerings/forms/form.blade.php ENDPATH**/ ?>