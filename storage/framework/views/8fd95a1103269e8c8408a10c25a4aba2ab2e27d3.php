<?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.print';
   } else {
      $routeName = 'admin.'.$modelName.'s.print';
   }
?>

<a href="<?php echo e(route($routeName, $model->id)); ?>"
   class="btn btn-block btn-default mt-2"
   title="Print <?php echo e(ucfirst($modelName)); ?>">
   <i class="<?php echo e(config('icons.print')); ?>"></i>
   <div class="d-none d-lg-inline">
      Print <?php echo e(ucfirst($modelName)); ?>

   </div>
</a>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/common/print.blade.php ENDPATH**/ ?>