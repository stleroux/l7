<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('tag-delete')): ?>
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($tag->id); ?>"
      data-url="<?php echo e(url('admin/tags', $tag->id)); ?>"
      title="Trash Tag">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/tags/actions/grid/destroy.blade.php ENDPATH**/ ?>