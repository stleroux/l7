<?php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes/unpublish';
   } else {
      $routeName = 'admin/'.$modelName.'s/unpublish';
   }
?>

<span data-toggle="modal" data-target="#unpublishModal">
	<button type="button"
		class="unpublish-model btn btn-sm btn-default"
		data-toggle="tooltip"
		
		data-id="<?php echo e($model->id); ?>"
		data-url="<?php echo e(url('admin/posts/unpublish', $model)); ?>"
		title="Unpublish <?php echo e(ucfirst($modelName)); ?>"
		>
		<i class="<?php echo e(config('icons.publish')); ?> text-warning"></i>
		
	</button>
</span>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/grid/unpublish.blade.php ENDPATH**/ ?>