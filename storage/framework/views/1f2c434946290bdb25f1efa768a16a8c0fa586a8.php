<!-- CANNOT use a link here, must use a button -->
<?php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/delete';
   } else {
      $routeName = 'admin/'.$modelName.'s/delete';
   }
?>

<button
   type="button"
   class="delete-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#deleteModal"
   data-id="<?php echo e($model->id); ?>"
   data-url="<?php echo e(url($routeName, $model->id)); ?>"
   title="Delete <?php echo e(ucfirst($modelName)); ?> Permanently">
   <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
</button>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/grid/delete.blade.php ENDPATH**/ ?>