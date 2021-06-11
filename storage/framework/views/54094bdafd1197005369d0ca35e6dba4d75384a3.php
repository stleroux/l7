<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card card-primary">

   <div class="card-header p-2">
      Feature Information
   </div>
   
   <div class="card-body pb-0">

      <div class="row">
         <div class="col">
            <?php echo $__env->make('admin.features.forms.fields.title', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
         <div class="col-xl-2">
            <?php echo $__env->make('admin.features.forms.fields.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>

      <div class="row">
         <div class="col">
            <?php echo $__env->make('admin.features.forms.fields.description', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>

   </div> <!-- Card body -->

   <?php if(Route::currentRouteName('') != 'admin.features.show'): ?>
      <div class="card-footer p-1">
         <?php echo Config::get('settings.formFieldsRequired'); ?>

      </div>
   <?php endif; ?>

</div><!-- Card -->

<?php /**PATH C:\sites\l7\resources\views/admin/features/forms/form.blade.php ENDPATH**/ ?>