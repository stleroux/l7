<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
   
      <?php echo $__env->make('admin.users.actions.common.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.users.actions.common.updateAndClose', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.users.actions.common.updateAndContinue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.users.actions.common.reset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <hr />

      <?php if($user->account_status): ?>
         <?php echo $__env->make('admin.users.actions.common.disable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
         <?php echo $__env->make('admin.users.actions.common.enable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>         
      <?php endif; ?>
   
   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/edit/blocks/actions.blade.php ENDPATH**/ ?>