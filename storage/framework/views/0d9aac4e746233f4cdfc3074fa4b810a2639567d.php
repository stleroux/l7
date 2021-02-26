
<?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.enable';
   } else {
      $routeName = 'admin.'.$modelName.'s.enable';
   }
?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($modelName.'-manage')): ?>
   <a href="<?php echo e(route($routeName, $model->id)); ?>" class="btn btn-sm btn-default" title="Enable <?php echo e(ucfirst($modelName)); ?>">
      <i class="<?php echo e(config('icons.enable')); ?> text-primary"></i>
   </a>
<?php endif; ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/actions/grid/enable.blade.php ENDPATH**/ ?>