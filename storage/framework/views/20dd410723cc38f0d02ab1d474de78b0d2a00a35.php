<!-- COLOR CODE -->
<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="color_code" class="">Color Code</label>
      
      <?php if(Route::currentRouteName('') == 'admin.finishes.show'): ?>

         <div class="p-1 m-0 bg-gray-light">
            <?php echo $finish->color_code; ?>

         </div>

      <?php else: ?>

         <input
            type="text"
            name="color_code"
            id="color_code"
            class="form-control form-control-sm <?php $__errorArgs = ['color_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            value="<?php echo e(old('name') ?? $finish->color_code); ?>"
            autofocus
         >

      <?php endif; ?>
      
      <?php $__errorArgs = ['color_code'];
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
   
</div><?php /**PATH C:\sites\l7\resources\views/admin/finishes/forms/fields/colorCode.blade.php ENDPATH**/ ?>