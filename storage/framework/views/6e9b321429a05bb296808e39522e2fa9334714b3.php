<?php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/publish';
   } else {
      $routeName = 'admin/'.$modelName.'s/publish';
   }
?>

<button type="button"
	class="publish-model btn btn-sm btn-default"
	data-toggle="modal"
	data-target="#publishModal"
	data-id="<?php echo e($model->id); ?>"
	data-url="<?php echo e(url($routeName, $model)); ?>"
	title="Publish <?php echo e(ucfirst($modelName)); ?>"
	>
	<i class="<?php echo e(config('icons.publish')); ?>"></i>
	
</button>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/grid/publish.blade.php ENDPATH**/ ?>