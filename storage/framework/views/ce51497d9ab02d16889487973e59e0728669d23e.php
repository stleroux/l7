<!-- NAME -->

<div class="form-group">

   <label for="name" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Name'); ?>

   </label>
   
   <input
      type="text"
      name="name"
      id="name"
      class="form-control form-control-sm <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      value="<?php echo e(old('name') ?? $mylink->name); ?>"
      placeholder="Name"
      data-inputmask=""
      autofocus
      onfocus="this.focus();this.select()"
   />
   
   <?php $__errorArgs = ['name'];
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

</div><?php /**PATH C:\sites\l7\resources\views/UI/mylinks/edit/name.blade.php ENDPATH**/ ?>