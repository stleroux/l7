<?php if(!$post->deleted_at): ?>

   <?php if($post->user_id == Auth::id() || Auth::user()->can('post-edit')): ?>
      <?php echo $__env->make('admin.posts.actions.grid.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php if(!$post->published_at): ?>
         <?php echo $__env->make('admin.posts.actions.grid.publish', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php else: ?>
         <?php echo $__env->make('admin.posts.actions.grid.unpublish', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endif; ?>
      <?php echo $__env->make('admin.posts.actions.grid.resetViews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>         

   <?php endif; ?>

<?php endif; ?>

<?php if($post->user_id == Auth::id() || Auth::user()->can('post-delete')): ?>
   <?php echo $__env->make('admin.posts.actions.grid.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>            
<?php endif; ?>


<?php if($post->deleted_at): ?>
   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post-edit')): ?>
      <?php echo $__env->make('admin.posts.actions.grid.restore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('admin.posts.actions.grid.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/index/actions.blade.php ENDPATH**/ ?>