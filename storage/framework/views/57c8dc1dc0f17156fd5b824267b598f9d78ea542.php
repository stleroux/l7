

<div class="form-group">

   <label for="last_login_date" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Last Login Date'); ?>

   </label>
   
   <?php if(Route::currentRouteName('') == 'admin.users.show' || Route::currentRouteName('') == 'admin.users.edit'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $user->last_login_date; ?>

      </div>

   <?php else: ?>

      <input
      	type="text"
      	name="last_login_date"
      	id="last_login_date"
      	value="<?php echo e(old('last_login_date') ?? $user->last_login_date); ?>"
      	class="form-control <?php $__errorArgs = ['last_login_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         placeholder="Last Login Date"
         data-inputmask=""
         <?php echo e($disabled ?? ''); ?>

      />

   <?php endif; ?>
   
   <?php $__errorArgs = ['last_login_date'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/forms/fields/last_login_date.blade.php ENDPATH**/ ?>