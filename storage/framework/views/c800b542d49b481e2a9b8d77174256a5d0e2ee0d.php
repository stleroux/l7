<?php
   if($modelName == 'finish'){
      $routeName = 'admin/finishes';
   } else {
      $routeName = 'admin/'.$modelName.'s';
   }
?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($modelName.'-delete')): ?>
   <a href="#"
      class="destroy-model btn btn-sm btn-default"
      data-toggle="modal"
      data-target="#destroyModal"
      data-id="<?php echo e($model->id); ?>"
      data-url="<?php echo e(url($routeName, $model->id)); ?>"
      title="Trash <?php echo e(ucfirst($modelName)); ?>">
      <i class="<?php echo e(config('icons.trash')); ?> text-pink"></i>
   </a>
<?php endif; ?>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/grid/destroy.blade.php ENDPATH**/ ?>