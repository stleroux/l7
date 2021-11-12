

<div class="form-group">

   <label for="postal_code" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Postal Code'); ?>

   </label>
   
   <?php if(Route::currentRouteName('') == 'admin.users.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $user->postal_code; ?>

      </div>

   <?php else: ?>

      <input
      	type="text"
      	name="postal_code"
      	id="postal_code"
      	class="form-control <?php $__errorArgs = ['postal_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      	value="<?php echo e(old('postal_code') ?? $user->postal_code); ?>"
         placeholder="Postal Code"
         data-inputmask="'mask': 'A9A-9A9'"
         <?php echo e($disabled ?? ''); ?>

      />

   <?php endif; ?>
   
   <?php $__errorArgs = ['postal_code'];
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
<?php /**PATH C:\sites\l7\resources\views/admin/users/forms/fields/postal_code.blade.php ENDPATH**/ ?>