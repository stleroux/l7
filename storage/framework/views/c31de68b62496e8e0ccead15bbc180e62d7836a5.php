<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('bug-delete')): ?>
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($bug->id); ?>"
      data-url="<?php echo e(url('admin/bugs', $bug->id)); ?>"
      title="Trash Bug">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
      
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/bugs/index/actions/destroy.blade.php ENDPATH**/ ?>