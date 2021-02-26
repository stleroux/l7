<?php if(!$post->deleted_at): ?>

   <?php if($post->user_id == Auth::id() || Auth::user()->can('post-edit')): ?>
      <?php echo $__env->make('admin.actions.grid.edit', ['modelName'=>'post', 'model'=>$post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php if(!$post->published_at): ?>
         <?php echo $__env->make('admin.actions.grid.publish', ['modelName'=>'post', 'model'=>$post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
         <?php echo $__env->make('admin.actions.grid.unpublish', ['modelName'=>'post', 'model'=>$post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      <?php echo $__env->make('admin.actions.grid.resetViews', ['modelName'=>'post', 'model'=>$post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <?php endif; ?>

<?php endif; ?>

<?php if($post->user_id == Auth::id() || Auth::user()->can('post-delete')): ?>
   <?php echo $__env->make('admin.actions.grid.destroy', ['modelName'=>'post', 'model'=>$post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>


<?php if($post->deleted_at): ?>
   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post-edit')): ?>
      <?php echo $__env->make('admin.actions.grid.restore', ['modelName'=>'post', 'model'=>$post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.actions.grid.delete', ['modelName'=>'post', 'model'=>$post], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/index/actions.blade.php ENDPATH**/ ?>