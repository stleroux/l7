<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bug-create')): ?>
   <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn btn-block btn-outline-success" title="Create Post">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      Create Post
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/actions/common/create.blade.php ENDPATH**/ ?>