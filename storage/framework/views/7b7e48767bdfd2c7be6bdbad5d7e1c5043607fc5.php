<!-- BODY -->

<div class="form-group">

   <label for="body" class=" <?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'body'); ?>

   </label>
   
   <?php if(Route::currentRouteName('') == 'admin.blocks.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $block->body ?? 'N/A'; ?>

      </div>

   <?php else: ?>

      <textarea
      	name="body"
      	id="body"
      	rows="8"
      	class="simple form-control form-control-sm <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('body') ?? $block->body); ?></textarea>

   <?php endif; ?>
   
   <?php $__errorArgs = ['body'];
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

</div><?php /**PATH C:\sites\l7\resources\views/admin/blocks/forms/fields/body.blade.php ENDPATH**/ ?>