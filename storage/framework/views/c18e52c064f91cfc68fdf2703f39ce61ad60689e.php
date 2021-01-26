<?php echo $__env->make('admin.recipes.edit.actions.recipes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.recipes.edit.actions.previous', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">
      <?php echo $__env->make('admin.recipes.edit.actions.updateAndClose', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.recipes.edit.actions.updateAndContinue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.recipes.edit.actions.reset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/edit/functions/actions.blade.php ENDPATH**/ ?>