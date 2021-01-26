<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('tag-edit')): ?>
   <a href="<?php echo e(route('admin.tags.edit', $tag)); ?>" class="btn btn-sm btn-default" title="Edit tag">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/tags/actions/grid/edit.blade.php ENDPATH**/ ?>