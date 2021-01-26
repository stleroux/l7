<!-- TITLE -->

<div class="form-group">

   <label for="title" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Title'); ?>

   </label>
   
   <input
      type="text"
      name="title"
      id="title"
      class="form-control form-control-sm <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
      value="<?php echo e(old('title')); ?>"
      placeholder="Title"
      data-inputmask=""
      autofocus
      onfocus="this.focus();this.select()"
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

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/bugs/create/fields/title.blade.php ENDPATH**/ ?>