<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post-edit')): ?>
   <a href="<?php echo e(route('admin.posts.edit', $post)); ?>" class="btn btn-sm btn-default" title="Edit post">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/actions/grid/edit.blade.php ENDPATH**/ ?>