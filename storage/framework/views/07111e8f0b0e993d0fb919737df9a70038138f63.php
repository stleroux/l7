<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('feature-edit')): ?>
   <a href="<?php echo e(route('admin.finishes.edit', $finish)); ?>" class="btn btn-sm btn-default" title="Edit feature">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/finishes/actions/grid/edit.blade.php ENDPATH**/ ?>