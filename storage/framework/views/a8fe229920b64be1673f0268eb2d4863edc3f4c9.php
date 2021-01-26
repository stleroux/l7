

<div class="form-group">

   <label for="fax" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Fax Number'); ?>

   </label>
   
   <input
      type="text"
      name="fax"
      id="fax"
      class="form-control <?php $__errorArgs = ['fax'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      value="<?php echo e(old('fax') ?? $user->fax); ?>"
      placeholder="Fax Number"
      data-inputmask="'mask': '(999) 999-9999'"
      <?php echo e($disabled ?? ''); ?>

   />
   
   <?php $__errorArgs = ['fax'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/forms/fields/fax.blade.php ENDPATH**/ ?>