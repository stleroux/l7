<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('tag-create')): ?>
   <a href="<?php echo e(route('admin.tags.create')); ?>" class="btn btn-block btn-outline-success" title="Create Tag">
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      Create Tag
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/tags/actions/common/create.blade.php ENDPATH**/ ?>