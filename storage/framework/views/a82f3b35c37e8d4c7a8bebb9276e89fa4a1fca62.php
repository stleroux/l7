<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card">

   <div class="card-body p-0">
   
      <div class="form-row">

         <div class="col-md-6">
            <?php echo $__env->make('admin.carvings.forms.fields.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>

         <div class="col-md-6">
            <?php echo $__env->make('admin.carvings.forms.fields.others', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>

      </div>

   </div>

   <?php if(Route::currentRouteName('') != 'admin.carvings.show'): ?>
      <!-- CARD FOOTER -->
      <div class="card-footer pt-1 pb-1 pl-2">
         <?php echo Config::get('settings.formFieldsRequired'); ?>

      </div>
   <?php endif; ?>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/form.blade.php ENDPATH**/ ?>