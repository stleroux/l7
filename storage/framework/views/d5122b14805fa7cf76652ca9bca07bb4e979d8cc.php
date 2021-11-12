<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission-create')): ?>
   <form action="<?php echo e(route('admin.permissions.storeBread')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <input type="hidden" name="part" value="multiple" />

      <div class="card card-info">

         <div class="card-header">
            <div class="card-title">Add Model Permissions (BREAD)</div>
            <div class="float-right">
               <?php echo $__env->make('admin.permissions.actions.common.reset', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               <?php echo $__env->make('admin.permissions.actions.common.save', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
         </div>
         
         
         
         <div class="card-body pt-2">

            <div class="row">
               
               <div class="col-6">

   <div class="form-group">

      <label for="modelNameBread" class="required">Model Name</label>

      <input
         type="text"
         name="modelNameBread"
         class="form-control form-control-sm <?php $__errorArgs = ['modelNameBread'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         placeholder="Model Name">

      <?php $__errorArgs = ['modelNameBread'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
         <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
         </span>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

   </div>

</div>
            </div>

            

         </div>
         
         <?php if(Route::currentRouteName('') != 'admin.permissions.show'): ?>
            <div class="card-footer p-1">
               <?php echo Config::get('settings.formFieldsRequired'); ?>

            </div>
         <?php endif; ?>
         
      </div>
   </form>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/permissions/create/bread.blade.php ENDPATH**/ ?>