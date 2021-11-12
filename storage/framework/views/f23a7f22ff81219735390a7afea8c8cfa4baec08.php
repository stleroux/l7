<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card card-primary">

   <div class="card-header p-2">
      
      Block Information
      
   </div>

   <div class="card-body pb-0">
      
      <div class="form-row">
         <div class="col-12 col-xl-8">
            <?php echo $__env->make('admin.blocks.forms.fields.title', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
         <div class="col-12 col-xl-2">
            <?php echo $__env->make('admin.blocks.forms.fields.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
         <div class="col-12 col-xl-2">
            <?php echo $__env->make('admin.blocks.forms.fields.name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>
      
      <div class="form-row">
         <div class="col-12">
            <?php echo $__env->make('admin.blocks.forms.fields.body', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>
      
   </div> <!-- Card body -->

   <?php if(Route::currentRouteName('') != 'admin.blocks.show'): ?>
      <div class="card-footer p-1">
         <?php echo Config::get('settings.formFieldsRequired'); ?>

      </div>
   <?php endif; ?>
   
</div><!-- Card -->
<?php /**PATH C:\sites\l7\resources\views/admin/blocks/forms/form.blade.php ENDPATH**/ ?>