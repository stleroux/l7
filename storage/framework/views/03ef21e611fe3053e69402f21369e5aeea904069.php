         <?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="row">

   <div class="col-md-3">

      <div class="card card-primary">

         <div class="card-header p-2">
            
            Role Information
            
         </div>


         <div class="card-body p-2">
            <div class="row">
               <?php echo $__env->make('admin.roles.forms.fields.name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.roles.forms.fields.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

         </div> <!-- Card body -->
      </div><!-- Card -->
   </div><!-- Col -->

   <div class="col-md-9">
      <?php echo $__env->make('admin.roles.forms.fields.permissions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>

</div><!-- Row -->
<?php /**PATH C:\sites\l7\resources\views/admin/roles/forms/form.blade.php ENDPATH**/ ?>