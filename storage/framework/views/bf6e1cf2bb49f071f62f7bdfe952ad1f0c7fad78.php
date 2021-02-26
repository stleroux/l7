

<div class="form-group">

   <label for="telephone" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Phone Number'); ?>

   </label>
   
   <?php if(Route::currentRouteName('') == 'admin.users.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $user->telephone; ?>

      </div>

   <?php else: ?>

      <input
      	type="text"
      	name="telephone"
      	id="telephone"
      	class="form-control <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      	value="<?php echo e(old('telephone') ?? $user->telephone); ?>"
         placeholder="Phone Number"
         data-inputmask="'mask': '(999) 999-9999'"
         <?php echo e($disabled ?? ''); ?>

      />

   <?php endif; ?>
   
   <?php $__errorArgs = ['telephone'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/forms/fields/telephone.blade.php ENDPATH**/ ?>