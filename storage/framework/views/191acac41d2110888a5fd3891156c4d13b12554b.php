<div class="form-row">

   <div class="col-md-4">
      <?php echo $__env->make('admin.projects.forms.fields.finishes.finishes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
   
   <div class="col-md-4">
      <?php echo $__env->make('admin.projects.forms.fields.materials.materials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
   
   <div class="col-md-4">
      <?php echo $__env->make('admin.projects.forms.fields.images.images', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
   
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/projects/forms/extras.blade.php ENDPATH**/ ?>