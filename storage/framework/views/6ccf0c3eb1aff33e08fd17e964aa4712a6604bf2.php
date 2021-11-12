<?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
	<div class="card card-primary">
<?php else: ?>
	<div class="card <?php echo e(($user->account_status ? 'card-primary' : 'card-danger')); ?>">
<?php endif; ?>

   <div class="card-header p-2">
      
      Profile Image
      
   </div>

   <div class="card-body p-2">
   	
   	<div class="form-row p-1">
         IMAGE
      </div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/users/forms/panels/image.blade.php ENDPATH**/ ?>