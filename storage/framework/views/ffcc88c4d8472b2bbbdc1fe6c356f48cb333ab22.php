<div class="card card-primary">

   <div class="card-header">
      <div class="card-title">Bug Information</div>
   </div>

   <div class="card-body">
      
      <div class="row">
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
      
      <div class="row">
         <div class="col-12">
            <?php echo $__env->make('admin.bugs.forms.fields.description', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>
      
      <div class="row">
         <div class="col-12">
            <?php echo $__env->make('admin.bugs.forms.fields.resolution', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div>
      </div>

   </div> <!-- Card body -->
   
</div><!-- Card -->
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/bugs/forms/form.blade.php ENDPATH**/ ?>