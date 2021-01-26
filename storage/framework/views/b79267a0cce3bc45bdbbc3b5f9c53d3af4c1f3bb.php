<div class="card card-primary">
   
   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">
      <?php echo $__env->make('admin.faqs.actions.common.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.faqs.actions.common.updateAndClose', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.faqs.actions.common.updateAndContinue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.faqs.actions.common.reset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/edit/blocks/actions.blade.php ENDPATH**/ ?>