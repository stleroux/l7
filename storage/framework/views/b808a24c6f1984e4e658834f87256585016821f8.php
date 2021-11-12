<?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
   <div class="card card-primary">
<?php else: ?>
   <div class="card <?php echo e(($user->account_status ? 'card-primary' : 'card-danger')); ?>">
<?php endif; ?>

   <div class="card-header p-2">
      
      Reason for Registeration Request
      
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         <div class="col-12"><?php echo $__env->make('admin.users.forms.fields.reasonToRegister', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>         
      </div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/users/forms/panels/reasonToRegister.blade.php ENDPATH**/ ?>