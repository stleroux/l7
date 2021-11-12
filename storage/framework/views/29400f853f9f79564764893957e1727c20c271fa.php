

<div class="form-group">

   <label for="redirectAfterLogin" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Redirect To Page After Login'); ?>

      <small>(Use "/" in path)</small>
   </label>
   
   <?php if(Route::currentRouteName('') == 'profile.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $user->redirectAfterLogin; ?>

      </div>

   <?php else: ?>

      <input
      	type="text"
      	name="redirectAfterLogin"
      	id="redirectAfterLogin"
      	class="form-control <?php $__errorArgs = ['redirectAfterLogin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      	value="<?php echo e(old('redirectAfterLogin') ?? $user->redirectAfterLogin); ?>"
         placeholder="Redirect To Page After Login"
         data-inputmask=""
         <?php echo e($disabled ?? ''); ?>

      />
      <small>Leave blank to be redirected to the homepage</small>

   <?php endif; ?>
   
   <?php $__errorArgs = ['redirectAfterLogin'];
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
<?php /**PATH C:\sites\l7\resources\views/UI/profile/forms/fields/redirectToPageAfterLogin.blade.php ENDPATH**/ ?>