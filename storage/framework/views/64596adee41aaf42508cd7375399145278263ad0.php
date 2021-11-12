



   <a href="<?php echo e(route('mylinks.edit', $link)); ?>" class="btn btn-sm btn-default">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
      Edit
   </a>

   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($link->id); ?>"
      data-url="<?php echo e(url('mylinks', $link->id)); ?>">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
      Trash
   </a>


<?php /**PATH C:\sites\l7\resources\views/UI/myLinks/index/actions.blade.php ENDPATH**/ ?>