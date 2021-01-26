<!-- EMAIL -->

 <div class="form-group">

   <label for="email" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'E-Mail'); ?>

   </label>
   
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
      data-inputmask="'mask': '*{1,64}@*{1,63}.*{1,63}'"
      <?php echo e($disabled ?? ''); ?>

   />

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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/form/fields/email.blade.php ENDPATH**/ ?>