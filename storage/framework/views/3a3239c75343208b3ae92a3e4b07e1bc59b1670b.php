<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-edit')): ?>
   <a href="<?php echo e(route('admin.carvings.edit', $carving)); ?>" class="btn btn-block btn-outline-primary">
      <i class="<?php echo e(config('icons.edit')); ?>"></i>
      Edit
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/show/actions/edit.blade.php ENDPATH**/ ?>