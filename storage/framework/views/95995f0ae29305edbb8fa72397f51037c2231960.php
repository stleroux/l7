<?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
   <div class="card card-primary">
<?php else: ?>
   <div class="card <?php echo e(($user->account_status ? 'card-primary' : 'card-danger')); ?>">
<?php endif; ?>

   <div class="card-header">
      <div class="card-title">User Information</div>
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         <div class="col-12 col-md-6"><?php echo $__env->make('admin.users.forms.fields.email', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
   		<div class="col-12 col-md-3"><?php echo $__env->make('admin.users.forms.fields.first_name', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
      	<div class="col-12 col-md-3"><?php echo $__env->make('admin.users.forms.fields.last_name', ['required'=>'required'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
      	<div class="col-12"><?php echo $__env->make('admin.users.forms.fields.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
      </div>

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/forms/panels/user.blade.php ENDPATH**/ ?>