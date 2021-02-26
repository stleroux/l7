<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
   
      <?php echo $__env->make('admin.actions.common.back', ['modelName'=>'user'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.common.updateAndClose', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.common.updateAndContinue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.common.reset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php if($user->username != 'admin'): ?>
         <hr />
         <?php if($user->account_status): ?>
            <?php echo $__env->make('admin.actions.common.disable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php else: ?>
            <?php echo $__env->make('admin.actions.common.enable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>         
         <?php endif; ?>
      <?php endif; ?>
   
   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/edit/blocks/actions.blade.php ENDPATH**/ ?>