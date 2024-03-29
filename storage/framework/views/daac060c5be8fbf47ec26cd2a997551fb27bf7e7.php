<?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
   
   <div class="card card-primary">
<?php else: ?>
   <?php if($errors->get('company_name')): ?>
      <div class="card <?php echo e(($user->account_status ? 'card-primary' : 'card-danger')); ?>">
   <?php else: ?>
      <div class="card <?php echo e(($user->account_status ? 'card-primary collapsed-card' : 'card-danger collapsed-card')); ?>">
   <?php endif; ?>
<?php endif; ?>

   <div class="card-header p-2">
      
      Other Information
      
      <div class="card-tools">
         <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
               <i class="fas fa-minus"></i>
            <?php else: ?>
               <i class="fas fa-plus"></i>
            <?php endif; ?>
         </button>
         <button type="button" class="btn btn-tool" data-card-widget="maximize">
            <i class="fas fa-expand"></i>
         </button>
      </div>
   </div>

   <div class="card-body p-2">
   	
   	<div class="form-row">
         <div class="col-12"><?php echo $__env->make('admin.users.forms.fields.public_email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12"><?php echo $__env->make('admin.users.forms.fields.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12"><?php echo $__env->make('admin.users.forms.fields.invoicer_client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12"><?php echo $__env->make('admin.users.forms.fields.company_name', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
         <div class="col-12"><?php echo $__env->make('admin.users.forms.fields.dart_doubleOut', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
      </div>

   </div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/users/forms/panels/other.blade.php ENDPATH**/ ?>