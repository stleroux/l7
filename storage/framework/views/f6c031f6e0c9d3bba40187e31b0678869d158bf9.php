<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-manage')): ?>
   <!-- CANNOT use a link here, must use a button -->
   <button type="button"
      class="delete-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#deleteModal"
      data-id="<?php echo e($carving->id); ?>"
      data-url="<?php echo e(url('admin/carvings/delete', $carving->id)); ?>"
      title="Permanently Delete Carving">
      <i class="<?php echo e(config('icons.delete')); ?> text-danger"></i>
      
   </button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/index/actions/grid/delete.blade.php ENDPATH**/ ?>