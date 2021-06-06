<!-- EMAIL -->

 <div class="form-group">

   <label for="email" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'E-Mail'); ?>

   </label>
   
   <?php if(Route::currentRouteName('') == 'admin.users.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $user->email; ?>

      </div>

   <?php else: ?>

      <input
         type="text"
         name="email"
         id="email"
         class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('email') ?? $user->email); ?>"
         autofocus
         autocomplete="email"
         placeholder="Email address"
         
         <?php echo e($disabled ?? ''); ?>

      />

   <?php endif; ?>

   <?php $__errorArgs = ['email'];
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
<?php /**PATH C:\sites\l7\resources\views/admin/users/forms/fields/email.blade.php ENDPATH**/ ?>