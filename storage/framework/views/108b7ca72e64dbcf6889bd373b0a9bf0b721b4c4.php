<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bug-edit')): ?>
   <a href="<?php echo e(route('admin.bugs.edit', $bug)); ?>" class="btn btn-sm btn-default" title="Edit Bug">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/bugs/actions/grid/edit.blade.php ENDPATH**/ ?>