<?php if(!$bug->deleted_at): ?>

   
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'bug', 'model'=>$bug], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'bug', 'model'=>$bug], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   

<?php endif; ?>

<?php if($bug->deleted_at): ?>

   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bug-manage')): ?>
      <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'bug', 'model'=>$bug], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'bug', 'model'=>$bug], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>

<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/bugs/index/actions.blade.php ENDPATH**/ ?>