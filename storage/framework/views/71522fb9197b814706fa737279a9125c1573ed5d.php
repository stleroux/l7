<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('carving-delete')): ?>
   <button type="button"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($carving->id); ?>"
      data-url="<?php echo e(url('admin/carvings', $carving->id)); ?>"
      title="Trash Carving">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
      
   </button>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/carvings/index/actions/grid/destroy.blade.php ENDPATH**/ ?>