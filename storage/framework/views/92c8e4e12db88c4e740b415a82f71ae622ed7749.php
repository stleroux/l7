

<div class="form-group">

   <label for="address_2" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Address 2'); ?>

   </label>
   
   <input
      type="text"
      name="address_2"
      id="address_2"
      class="form-control <?php $__errorArgs = ['address_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      value="<?php echo e(old('address_2') ?? $user->address_2); ?>"
      placeholder="Address 2"
      data-inputmask=""
      <?php echo e($disabled ?? ''); ?>

   />
   
   <?php $__errorArgs = ['address_2'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/form/fields/address_2.blade.php ENDPATH**/ ?>