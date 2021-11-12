<?php if(!$project->deleted_at): ?>
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'project', 'model'=>$project], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.resetViews', ['modelName'=>'project', 'model'=>$project], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'project', 'model'=>$project], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($project->deleted_at): ?>
   <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'project', 'model'=>$project], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'project', 'model'=>$project], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/projects/index/actions.blade.php ENDPATH**/ ?>