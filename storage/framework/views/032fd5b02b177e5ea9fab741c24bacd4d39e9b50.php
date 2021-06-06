<!-- CANNOT use a link here, must use a button -->
<?php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/delete';
   } else {
      $routeName = 'admin/'.$modelName.'s/delete';
   }
?>

<span data-toggle="modal" data-target="#deleteModal">
   <button
      type="button"
      class="delete-model btn btn-sm btn-default"
      data-toggle="tooltip"
      data-id="<?php echo e($model->id); ?>"
      data-url="<?php echo e(url($routeName, $model->id)); ?>"
      title="Delete <?php echo e(ucfirst($modelName)); ?> Permanently">
      <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
   </button>
</span>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/grid/delete.blade.php ENDPATH**/ ?>