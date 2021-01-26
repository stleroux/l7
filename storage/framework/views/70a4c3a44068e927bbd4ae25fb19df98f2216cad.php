<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bug-edit')): ?>
   <a href="<?php echo e(route('admin.bugs.edit', $bug)); ?>" class="btn btn-block btn-outline-primary">
      <i class="<?php echo e(config('icons.edit')); ?>"></i>
      Edit
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/bugs/actions/common/edit.blade.php ENDPATH**/ ?>