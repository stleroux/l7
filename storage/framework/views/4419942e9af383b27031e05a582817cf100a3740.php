<?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
   <div class="card card-primary collapsed-card">
<?php else: ?>
   <?php if($errors->get('company_name')): ?>
      <div class="card <?php echo e(($user->account_status ? 'card-primary' : 'card-danger')); ?>">
   <?php else: ?>
      <div class="card <?php echo e(($user->account_status ? 'card-primary collapsed-card' : 'card-danger collapsed-card')); ?>">
   <?php endif; ?>
<?php endif; ?>

   <div class="card-header p-2">
      
      Login Information
      
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-plus"></i>
         </button>
         <button type="button" class="btn btn-tool" data-card-widget="maximize">
            <i class="fas fa-expand"></i>
         </button>
      </div>
   </div>

   <div class="card-body p-2">
   	
   	<div class="form-row">
         <div class="col-12"><?php echo $__env->make('admin.users.forms.fields.last_login_date', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12"><?php echo $__env->make('admin.users.forms.fields.login_count', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12"><?php echo $__env->make('admin.users.forms.fields.previous_login_date', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
      </div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/users/forms/panels/login.blade.php ENDPATH**/ ?>