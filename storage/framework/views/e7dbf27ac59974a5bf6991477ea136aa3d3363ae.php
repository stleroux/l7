

<a href="<?php echo e(route('admin.posts.index')); ?>"
   class="btn btn-block btn-default">
   <i class="<?php echo e(config('icons.back')); ?>"></i>
   Back
</a>

<?php if($previous): ?>
   <a href="<?php echo e(route('admin.posts.show', $previous)); ?>"
      class="btn btn-block btn-secondary"
      title="Previous post">
      <i class="<?php echo e(config('icons.previous')); ?>"></i>
      Previous Post
   </a>
<?php endif; ?>

<?php if($next): ?>
   <a href="<?php echo e(route('admin.posts.show', $next)); ?>"
      class="btn btn-block btn-secondary"
      title="Next post">
      Next Post
      <i class="<?php echo e(config('icons.next')); ?>"></i>
   </a>
<?php endif; ?>

<div class="card card-primary mt-2">
   <div class="card-header p-2">Actions</div>
   <div class="card-body p-1">

      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post-edit')): ?>
         <a href="<?php echo e(route('admin.posts.edit', $post)); ?>" class="btn btn-block btn-outline-primary">
            <i class="<?php echo e(config('icons.edit')); ?>"></i>
            Edit
         </a>
      <?php endif; ?>

   </div>
</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/show/sections/functions/actions.blade.php ENDPATH**/ ?>