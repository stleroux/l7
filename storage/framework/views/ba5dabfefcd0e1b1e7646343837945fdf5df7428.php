<?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
	<div class="card card-info">
<?php else: ?>
	<div class="card <?php echo e(($user->account_status ? 'card-info' : 'card-danger')); ?>">
<?php endif; ?>

   <div class="card-header p-2">
      
      Password
      
   </div>

   <div class="card-body p-2">
   	
   	<div class="form-row">
         <div class="col-12"><?php echo $__env->make('admin.users.forms.fields.password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
      </div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/users/forms/panels/password.blade.php ENDPATH**/ ?>