<?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.index';
   } else {
      $routeName = 'admin.'.$modelName.'s.index';
   }
?>

<a href="<?php echo e(route($routeName)); ?>" class="btn btn-block btn-default">
   <i class="<?php echo e(config('icons.back')); ?>"></i>
   Back
</a>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/common/back.blade.php ENDPATH**/ ?>