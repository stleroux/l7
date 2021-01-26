<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-edit')): ?>
   <a href="<?php echo e(route('admin.carvings.edit', $carving)); ?>" class="btn btn-sm btn-default" title="Edit carving">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
      
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/index/actions/grid/edit.blade.php ENDPATH**/ ?>