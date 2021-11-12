<!-- NAME -->

<div class="form-group">

   <label for="name" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Name'); ?>

   </label>
   
   <?php if(Route::currentRouteName('') == 'admin.blocks.show' || Route::currentRouteName('') == 'admin.blocks.edit'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo e($block->name ?? 'N/A'); ?>

      </div>
      <input type="hidden" name="name" value="<?php echo e(old('name') ?? $block->name); ?>">

   <?php else: ?>

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
         value="<?php echo e(old('name') ?? $block->name); ?>"
         placeholder="Name"
         data-inputmask=""
      />

   <?php endif; ?>
   
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

</div><?php /**PATH C:\sites\l7\resources\views/admin/blocks/forms/fields/name.blade.php ENDPATH**/ ?>