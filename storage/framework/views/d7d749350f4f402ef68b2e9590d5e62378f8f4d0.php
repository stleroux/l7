<div class="row">

   <div class="col-md-3">

      <div class="card card-primary">

         <div class="card-header">
            <div class="card-title">Role Information</div>
         </div>
         <div class="card-body">
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/roles/forms/form.blade.php ENDPATH**/ ?>