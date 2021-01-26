

<div class="form-group">

   <label for="previous_login_date" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Previous Login Date'); ?>

   </label>
   
   <input
   	type="text"
   	name="previous_login_date"
   	id="previous_login_date"
   	value="<?php echo e(old('previous_login_date') ?? $user->previous_login_date); ?>"
   	class="form-control <?php $__errorArgs = ['previous_login_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      placeholder="Previous Login Date"
      data-inputmask=""
      <?php echo e($disabled ?? ''); ?>

   />
   
   <?php $__errorArgs = ['previous_login_date'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/form/fields/previous_login_date.blade.php ENDPATH**/ ?>