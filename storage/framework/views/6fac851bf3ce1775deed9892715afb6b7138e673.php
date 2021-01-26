<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('material-edit')): ?>
   <a href="<?php echo e(route('admin.materials.edit', $material)); ?>" class="btn btn-sm btn-default" title="Edit Material">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/materials/actions/grid/edit.blade.php ENDPATH**/ ?>