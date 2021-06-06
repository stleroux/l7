<?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.create';
   } else {
      $routeName = 'admin.'.$modelName.'s.create';
   }
?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($modelName.'-create')): ?>

   <a 
      href="<?php echo e(route($routeName)); ?>"
      class="btn btn-block btn-outline-success"
      
      title="Create <?php echo e(ucfirst($modelName)); ?>"
   >
      <i class="<?php echo e(config('icons.add')); ?>"></i>
      
      <?php if($modelName == 'bug'): ?>
      	Report <?php echo e(ucfirst($modelName)); ?>

      <?php elseif($modelName == 'feature'): ?>
      	Request <?php echo e(ucfirst($modelName)); ?>

      <?php else: ?>
      	Create <?php echo e(ucfirst($modelName)); ?>

      <?php endif; ?>
      
   </a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/common/create.blade.php ENDPATH**/ ?>