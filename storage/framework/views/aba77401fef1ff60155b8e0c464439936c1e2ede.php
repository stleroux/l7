<?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.index';
   }
   elseif($modelName == 'category'){
      $routeName = 'admin.categories.index';
   } else {
      $routeName = 'admin.'.$modelName.'s.index';
   }
?>

<a
	href="<?php echo e(route($routeName)); ?>"
	class="btn btn-block btn-default"
	title="Back"
>
   <i class="<?php echo e(config('icons.back')); ?>"></i>
   Back
</a>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/common/back.blade.php ENDPATH**/ ?>