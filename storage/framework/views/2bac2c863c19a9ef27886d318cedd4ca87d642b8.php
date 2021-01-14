<!-- INVOICER VERSION NO -->

<div class="form-group">

   <label for="invoicerVersionNo" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Invoicer Version No'); ?>

   </label>
   
   <input
      type="text"
      name="invoicerVersionNo"
      id="invoicerVersionNo"
      class="form-control <?php $__errorArgs = ['invoicerVersionNo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      value="<?php echo e(old('invoicerVersionNo') ?? Config::get('settings.invoicerVersionNo')); ?>"
      placeholder="invoicerVersionNo"
      data-inputmask=""
   />
   <small>Invoicer version number</small>
   
   <?php $__errorArgs = ['invoicerVersionNo'];
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

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/settings/fields/invoicerVersionNo.blade.php ENDPATH**/ ?>