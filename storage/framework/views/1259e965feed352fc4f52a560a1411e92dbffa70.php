<!-- FIRST NAME -->

<div class="form-group">

   <label for="first_name" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'First name'); ?>

   </label>
   
   <?php if(Route::currentRouteName('') == 'admin.users.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $user->first_name; ?>

      </div>

   <?php else: ?>

      <input
         type="text"
         name="first_name"
         id="first_name"
         class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         value="<?php echo e(old('first_name') ?? $user->first_name); ?>"
         placeholder="First name"
         data-inputmask=""
         <?php echo e($disabled ?? ''); ?>

      />

   <?php endif; ?>

   <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <span class="invalid-feedback d-inline" role="alert">
         <strong><?php echo e($message); ?></strong>
      </span>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/users/forms/fields/first_name.blade.php ENDPATH**/ ?>