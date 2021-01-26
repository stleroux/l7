<?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
	<div class="card card-primary">
<?php else: ?>
	<div class="card <?php echo e(($user->account_status ? 'card-primary' : 'card-danger')); ?>">
<?php endif; ?>

   <div class="card-header">
      <div class="card-title">Profile Image</div>
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         IMAGE
      </div>

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/form/image.blade.php ENDPATH**/ ?>