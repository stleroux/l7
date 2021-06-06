<a href="<?php echo e(route('bugs.show', $bug)); ?>" class="btn btn-sm btn-default">
   <i class="<?php echo e(config('icons.view')); ?> text-primary"></i>
   View
</a>

<?php if($bug->status == 'New'): ?>

   <a href="<?php echo e(route('bugs.edit', $bug)); ?>" class="btn btn-sm btn-default">
      <i class="<?php echo e(config('icons.edit')); ?> text-primary"></i>
      Edit
   </a>

   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($bug->id); ?>"
      data-url="<?php echo e(url('bugs', $bug->id)); ?>">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
      Trash
   </a>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/UI/bugs/index/actions.blade.php ENDPATH**/ ?>