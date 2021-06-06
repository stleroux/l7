

<div class="form-group">

   <label for="created_at" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Member Since'); ?>

   </label>
   
   <?php if(Route::currentRouteName('') == 'admin.users.show' || Route::currentRouteName('') == 'admin.users.edit'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $user->created_at; ?>

      </div>

   <?php else: ?>

      <input
      	type="text"
      	name="created_at"
      	id="created_at"
      	value="<?php echo e(old('created_at') ?? $user->created_at->format('F Y')); ?>"
      	class="form-control <?php $__errorArgs = ['created_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         placeholder="Member Since"
         data-inputmask=""
         <?php echo e($disabled ?? ''); ?>

      />

   <?php endif; ?>
   
   <?php $__errorArgs = ['created_at'];
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
<?php /**PATH C:\sites\l7\resources\views/admin/users/forms/fields/member_since.blade.php ENDPATH**/ ?>