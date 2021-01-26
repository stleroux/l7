<?php if(!$finish->deleted_at): ?>
   <?php echo $__env->make('admin.finishes.actions.grid.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.finishes.actions.grid.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($finish->deleted_at): ?>
   <?php echo $__env->make('admin.finishes.actions.grid.restore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.finishes.actions.grid.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/finishes/index/actions.blade.php ENDPATH**/ ?>