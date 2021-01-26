<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('finish-delete')): ?>
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($finish->id); ?>"
      data-url="<?php echo e(url('admin/finishes', $finish->id)); ?>"
      title="Trash Finish">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/finishes/actions/grid/destroy.blade.php ENDPATH**/ ?>