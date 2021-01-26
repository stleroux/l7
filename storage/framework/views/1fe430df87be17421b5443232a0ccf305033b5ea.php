<?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
   <div class="card card-primary collapsed-card">
<?php else: ?>
   <?php if(
      $errors->get('address_1') ||
      $errors->get('city') ||
      $errors->get('province') ||
      $errors->get('postal_code')): ?>
      <div class="card <?php echo e(($user->account_status ? 'card-primary' : 'card-danger')); ?>">
   <?php else: ?>
      <div class="card <?php echo e(($user->account_status ? 'card-primary collapsed-card' : 'card-danger collapsed-card')); ?>">
   <?php endif; ?>
<?php endif; ?>

   <div class="card-header">
      <div class="card-title">Address Information</div>
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-plus"></i>
         </button>
         <button type="button" class="btn btn-tool" data-card-widget="maximize">
            <i class="fas fa-expand"></i>
         </button>
      </div>
   </div>

   <div class="card-body p-3">
   	
   	<div class="form-row">
         <div class="col-12 col-md-6"><?php echo $__env->make('admin.users.form.fields.address_1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12 col-md-6"><?php echo $__env->make('admin.users.form.fields.address_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12 col-md-2"><?php echo $__env->make('admin.users.form.fields.city', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12 col-md-2"><?php echo $__env->make('admin.users.form.fields.province', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12 col-md-3"><?php echo $__env->make('admin.users.form.fields.postal_code', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
      </div>

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/form/address.blade.php ENDPATH**/ ?>