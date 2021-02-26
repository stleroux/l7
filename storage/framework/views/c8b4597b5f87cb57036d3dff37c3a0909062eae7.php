<?php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/restore';
   } else {
      $routeName = 'admin/'.$modelName.'s/restore';
   }
?>

<button type="button"
   class="restore-model btn btn-sm btn-default"
   data-toggle="modal"
   data-target="#restoreModal"
   data-id="<?php echo e($model->id); ?>"
   data-url="<?php echo e(url($routeName, $model)); ?>"
   title="Restore <?php echo e(ucfirst($modelName)); ?>"
   >
   <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
</button>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/grid/restore.blade.php ENDPATH**/ ?>