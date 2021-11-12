

<div class="form-group">

   <label for="login_count" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Login Count'); ?>

   </label>

   <?php if(Route::currentRouteName('') == 'admin.users.show' || Route::currentRouteName('') == 'admin.users.edit'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $user->login_count; ?>

      </div>

   <?php else: ?>

      <input
      	type="number"
      	name="login_count"
      	id="login_count"
      	value="<?php echo e(old('login_count') ?? $user->login_count); ?>"
      	class="form-control <?php $__errorArgs = ['login_count'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         placeholder="Login Count"
         data-inputmask=""
         <?php echo e($disabled ?? ''); ?>

      />

   <?php endif; ?>
   
   <?php $__errorArgs = ['login_count'];
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
<?php /**PATH C:\sites\l7\resources\views/admin/users/forms/fields/login_count.blade.php ENDPATH**/ ?>