<div class="card card-primary">
   
   <div class="card-header p-2">Actions</div>
   
   <div class="card-body p-1">
		<?php echo $__env->make('admin.actions.common.back', ['modelName'=>'recipe'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.actions.common.next', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('admin.actions.common.previous', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.common.edit', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      
      <?php echo $__env->make('admin.actions.common.publishUnpublish', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.common.print', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.common.printToPDF', ['modelName'=>'recipe', 'model'=>$recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/recipes/show/blocks/actions.blade.php ENDPATH**/ ?>