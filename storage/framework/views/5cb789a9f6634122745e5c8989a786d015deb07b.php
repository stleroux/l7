<!-- PAGE URL -->

<div class="form-group">

   <label for="title" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Page URL'); ?>

   </label>
   
   <input
      type="text"
      name="page_url"
      id="page_url"
      class="form-control form-control-sm <?php $__errorArgs = ['page_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      value="<?php echo e(old('page_url') ?? $bug->page_url); ?>"
      placeholder="Title"
      data-inputmask=""
   />
   
   <?php $__errorArgs = ['title'];
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

</div><?php /**PATH C:\sites\l7\resources\views/UI/bugs/edit/page_url.blade.php ENDPATH**/ ?>