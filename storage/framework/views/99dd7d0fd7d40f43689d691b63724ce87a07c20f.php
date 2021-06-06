<?php
   if($modelName == 'finish'){
      $routeName = 'admin.finishes.addAllPerms';
   } else {
      $routeName = 'admin.'.$modelName.'s.addAllPerms';
   }
?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check($modelName.'-manage')): ?>
   	<a href="<?php echo e(route($routeName, $model)); ?>"
		class="btn btn-sm btn-default"
   		title="Add All Permissions"
   		data-toggle="tooltip">
      <i class="<?php echo e(config('icons.permissions')); ?> text-primary"></i>
   </a>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/actions/grid/addAllPerms.blade.php ENDPATH**/ ?>