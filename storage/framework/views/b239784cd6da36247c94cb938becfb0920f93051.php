<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('material-delete')): ?>
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($material->id); ?>"
      data-url="<?php echo e(url('admin/materials', $material->id)); ?>"
      title="Trash Material">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/materials/actions/grid/destroy.blade.php ENDPATH**/ ?>