<?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.edit';
   } else {
      $routeName = 'admin.'.$modelName.'s.edit';
   }
?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($modelName.'-edit')): ?>
   <a href="<?php echo e(route($routeName, $model->id)); ?>" class="btn btn-sm btn-default" title="Edit <?php echo e(ucfirst($modelName)); ?>">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/grid/edit.blade.php ENDPATH**/ ?>