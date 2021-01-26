<?php echo $__env->make('admin.carvings.create.actions.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card card-primary mt-2">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">

      <?php echo $__env->make('admin.carvings.create.actions.saveAndClose', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.carvings.create.actions.saveAndContinue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.carvings.create.actions.saveAndNew', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.carvings.create.actions.reset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/create/functions/actions.blade.php ENDPATH**/ ?>