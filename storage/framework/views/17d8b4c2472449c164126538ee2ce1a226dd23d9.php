

 <?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.disable';
   } else {
      $routeName = 'admin.'.$modelName.'s.disable';
   }
?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($modelName.'-manage')): ?>
   <a href="<?php echo e(route($routeName, $model->id)); ?>" class="btn btn-sm btn-default" title="Disable <?php echo e(ucfirst($modelName)); ?>">
      <i class="<?php echo e(config('icons.disable')); ?> text-pink"></i>
   </a>
<?php endif; ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/grid/disable.blade.php ENDPATH**/ ?>