
<div class="card mb-2 card-primary">
   <div class="card-header p-2">
      Other Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>
   <div class="card-body p-2">

      <div class="form-row p-1 bg-secondary">
         Dimensions
      </div>

      <div class="form-row pb-2">
         <?php echo $__env->make('admin.carvings.forms.fields.others.width', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.carvings.forms.fields.others.height', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.carvings.forms.fields.others.depth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.carvings.forms.fields.others.weight', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      
      <div class="form-row p-1 bg-secondary">
         Times
      </div>

      <div class="form-row pb-2">
         <?php echo $__env->make('admin.carvings.forms.fields.others.designTimeHrs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.carvings.forms.fields.others.designTimeMins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.carvings.forms.fields.others.machineTimeHrs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.carvings.forms.fields.others.machineTimeMins', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      
      <div class="form-row p-1 bg-secondary">
         Other
      </div>

      <div class="form-row pb-2">
         <?php echo $__env->make('admin.carvings.forms.fields.others.completed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.carvings.forms.fields.others.price', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.carvings.forms.fields.others.jobSheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>

   </div>
</div><?php /**PATH C:\sites\l7\resources\views/admin/carvings/forms/fields/others.blade.php ENDPATH**/ ?>