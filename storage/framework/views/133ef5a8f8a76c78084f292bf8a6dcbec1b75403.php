

<div class="card card-trans-2 mb-2">
   
   <div class="card-header bg-primary p-2">
      <div class="card-title">Address Info</div>
     
   </div>

   <div class="card-body section_body p-2">
      <div class="form-row">
         <div class="col-md-4">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.address_1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.address_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
      </div>

      <div class="form-row">
         <div class="col-md-2">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.city', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.province', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.postal_code', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
      </div>
   </div>

</div>

<?php /**PATH C:\sites\l7\resources\views/UI/profile/edit/address.blade.php ENDPATH**/ ?>