<?php if(!$tag->deleted_at): ?>

   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'tag', 'model'=>$tag], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'tag', 'model'=>$tag], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>

<?php if($tag->deleted_at): ?>

   <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'tag', 'model'=>$tag], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'tag', 'model'=>$tag], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/tags/index/actions.blade.php ENDPATH**/ ?>