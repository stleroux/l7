<div class="card card-primary">

   <div class="card-header p-2">Actions</div>

   <div class="card-body p-1">
		
		
		<?php echo $__env->make('admin.actions.common.back', ['modelName'=>'bug'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.actions.common.edit', ['modelName'=>'bug', 'model'=>$bug], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/bugs/show/blocks/actions.blade.php ENDPATH**/ ?>