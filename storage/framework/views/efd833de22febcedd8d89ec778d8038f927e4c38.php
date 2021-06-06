<?php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/restore';
   }
   elseif($modelName == 'category'){
      $routeName = 'admin/categories/restore';
   } else {
      $routeName = 'admin/'.$modelName.'s/restore';
   }
?>

<span data-toggle="modal" data-target="#restoreModal">
   <button type="button"
      class="restore-model btn btn-sm btn-default"
      data-toggle="tooltip"
      
      data-id="<?php echo e($model->id); ?>"
      data-url="<?php echo e(url($routeName, $model)); ?>"
      title="Restore <?php echo e(ucfirst($modelName)); ?>"
      >
      <i class="<?php echo e(config('icons.restore')); ?> text-primary"></i>
   </button>
</span>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/grid/restore.blade.php ENDPATH**/ ?>