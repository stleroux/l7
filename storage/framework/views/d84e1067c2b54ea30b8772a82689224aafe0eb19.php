

   
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'block', 'model'=>$block], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
      
   
   
   





   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('blocks-manage')): ?>
      <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'blocks', 'model'=>$block], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'blocks', 'model'=>$block], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>


<?php /**PATH C:\sites\l7\resources\views/admin/blocks/index/actions.blade.php ENDPATH**/ ?>