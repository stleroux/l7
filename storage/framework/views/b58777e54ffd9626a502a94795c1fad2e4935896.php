<?php if(!$faq->deleted_at): ?>
   <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'faq', 'model'=>$faq], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.resetViews', ['modelName'=>'faq', 'model'=>$faq], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'faq', 'model'=>$faq], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($faq->deleted_at): ?>
   <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'faq', 'model'=>$faq], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'faq', 'model'=>$faq], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/faqs/index/actions.blade.php ENDPATH**/ ?>