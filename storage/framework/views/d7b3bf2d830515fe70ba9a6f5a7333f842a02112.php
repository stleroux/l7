<!-- DATE FORMAT -->

<div class="form-group">

   <label for="dateFormat" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Date Format'); ?>

   </label>
   
   <input
      type="text"
      name="dateFormat"
      id="dateFormat"
      class="form-control <?php $__errorArgs = ['dateFormat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      value="<?php echo e(old('dateFormat') ?? Config::get('settings.dateFormat')); ?>"
      placeholder="dateFormat"
      data-inputmask=""
   />
   <small>Use any PHP compatible date format</small>
   
   <?php $__errorArgs = ['dateFormat'];
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

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/dateFormat.blade.php ENDPATH**/ ?>