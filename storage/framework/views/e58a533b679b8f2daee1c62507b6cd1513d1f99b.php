<?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.edit';
   } else {
      $routeName = 'admin.'.$modelName.'s.edit';
   }
?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($modelName.'-edit')): ?>
   <a href="<?php echo e(route($routeName, $model->id)); ?>" class="btn btn-block btn-outline-primary"
      title="Edit <?php echo e($modelName); ?>">
      <i class="<?php echo e(config('icons.edit')); ?>"></i>
      Edit
   </a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/common/edit.blade.php ENDPATH**/ ?>