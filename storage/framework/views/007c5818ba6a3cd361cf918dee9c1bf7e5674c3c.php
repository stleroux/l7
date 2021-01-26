<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('feature-delete')): ?>
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($feature->id); ?>"
      data-url="<?php echo e(url('admin/features', $feature->id)); ?>"
      title="Trash Feature">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/features/actions/grid/destroy.blade.php ENDPATH**/ ?>