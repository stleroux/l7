
<div class="card card-trans-2 mb-2">
   <div class="card-header bg-primary p-2">Profile Info</div>
   <div class="card-body p-2">
      <div class="form-row">
         <div class="col-md-3">
            <?php echo $__env->make('admin.users.forms.fields.first_name', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
         <div class="col-md-3">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.last_name', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.email', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.public_email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
      </div>

      <div class="form-row">
         <div class="col-md-2">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.telephone', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.cell', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.fax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-group">
               <?php echo $__env->make('admin.users.forms.fields.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
      </div>

      <div class="form-row">

         <?php if($user->invoicer_client != 0): ?>
            <div class="col-md-2">
               <div class="form-group">
                  <?php echo $__env->make('admin.users.forms.fields.invoicer_client', ['readonly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <?php echo $__env->make('admin.users.forms.fields.company_name', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>
         <?php endif; ?>

         <?php if($user->dart_doubleOut > 0): ?>
            <div class="col-md-2">
               <div class="form-group">
                  <?php echo $__env->make('admin.users.forms.fields.dart_doubleOut', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
            </div>
         <?php endif; ?>
         
      </div>
      
   </div>
</div>
<?php /**PATH C:\sites\l7\resources\views/UI/profile/edit/general.blade.php ENDPATH**/ ?>