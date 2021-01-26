<?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
   <div class="card card-primary collapsed-card">
<?php else: ?>
   <?php if($errors->get('telephone')): ?>
      <div class="card <?php echo e(($user->account_status ? 'card-primary' : 'card-danger')); ?>">
   <?php else: ?>
      <div class="card <?php echo e(($user->account_status ? 'card-primary collapsed-card' : 'card-danger collapsed-card')); ?>">
   <?php endif; ?>
<?php endif; ?>

   <div class="card-header">
      <div class="card-title">Contact Information</div>
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
   		<div class="col-12 col-md-3"><?php echo $__env->make('admin.users.form.fields.telephone', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12 col-md-3"><?php echo $__env->make('admin.users.form.fields.cell', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12 col-md-3"><?php echo $__env->make('admin.users.form.fields.fax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
      </div>

   </div>

</div>
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/form/contact.blade.php ENDPATH**/ ?>