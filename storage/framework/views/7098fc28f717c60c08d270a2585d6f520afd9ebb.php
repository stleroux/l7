
<div class="card mb-2">
   <div class="card-header py-1">
      General Information
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
      </div>
   </div>
   <div class="card-body p-3">

      <div class="form-row pt-2">
         <?php echo $__env->make('admin.projects.fields.general.name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('admin.projects.fields.general.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      
      <div class="form-row">
         <?php echo $__env->make('admin.projects.fields.general.description', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>

      <div class="form-row">
         <?php echo $__env->make('admin.projects.fields.general.tags', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/fields/general.blade.php ENDPATH**/ ?>