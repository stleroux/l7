

<div class="form-group">

   <label for="password" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Password'); ?>

   </label>
   
   <input
   	type="text"
   	name="password"
   	id="password"
   	class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
   	value="<?php echo e(old('password')); ?>"
      placeholder="Password"
      data-inputmask=""
      <?php if(Route::currentRouteName('') == 'admin.users.show'): ?>
         disabled
      <?php endif; ?>
   />

   <?php if(Route::currentRouteName('') == 'admin.users.create'): ?>
   	<small id="passwordHelpBlock" class="form-text text-muted">
   		Only enter a new password to overwrite the default (password).
   	</small>
   <?php elseif(Route::currentRouteName('') == 'admin.users.edit'): ?>
   	<small id="passwordHelpBlock" class="form-text text-muted">
   		Only enter a new password to change the current one.
   	</small>
   <?php endif; ?>
   
   <?php $__errorArgs = ['password'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/forms/fields/password.blade.php ENDPATH**/ ?>