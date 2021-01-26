<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post-delete')): ?>
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($post->id); ?>"
      data-url="<?php echo e(url('admin/posts', $post->id)); ?>"
      title="Trash Post">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/posts/actions/grid/destroy.blade.php ENDPATH**/ ?>