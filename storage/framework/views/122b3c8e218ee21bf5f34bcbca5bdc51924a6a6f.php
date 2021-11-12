 <?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.removeAllPerms';
   } else {
      $routeName = 'admin.'.$modelName.'s.removeAllPerms';
   }
?>

 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($modelName.'-manage')): ?>
   <a href="<?php echo e(route($routeName, $model)); ?>"
   		class="btn btn-sm btn-default"
   		data-toggle="tooltip"
   		title="Remove All Permissions">
      <i class="<?php echo e(config('icons.permissions')); ?> text-danger"></i>
   </a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/grid/removeAllPerms.blade.php ENDPATH**/ ?>