<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card card-primary">

   <div class="card-header p-2">
      
      Bug Information
      
   </div>

   <div class="card-body p-2">
      
      <div class="form-row">
         <div class="col-12 col-xl-5">
            <?php echo $__env->make('admin.bugs.forms.fields.title', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
         <div class="col-12 col-xl-5">
            <?php echo $__env->make('admin.bugs.forms.fields.page_url', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
         <div class="col-12 col-xl-2">
            <?php echo $__env->make('admin.bugs.forms.fields.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>
      
      <div class="form-row">
         <div class="col-12">
            <?php echo $__env->make('admin.bugs.forms.fields.description', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>
      
      <div class="form-row">
         <div class="col-12">
            <?php echo $__env->make('admin.bugs.forms.fields.resolution', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>

   </div> <!-- Card body -->
   
</div><!-- Card -->
<?php /**PATH C:\sites\l7\resources\views/admin/bugs/forms/form.blade.php ENDPATH**/ ?>