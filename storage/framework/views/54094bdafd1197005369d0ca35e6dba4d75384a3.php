<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">

   <div class="col">

      <div class="card card-primary">

         <div class="card-header p-2">
            
            Feature Information
            
         </div>
         
         <div class="card-body">
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
      </div><!-- Card -->
   </div><!-- Col -->

</div><!-- Row -->
<?php /**PATH C:\sites\l7\resources\views/admin/features/forms/form.blade.php ENDPATH**/ ?>