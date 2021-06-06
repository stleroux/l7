<!-- NOTES -->
<div class="col-12">
   
   <div class="form-group">
      
      <label for="name" class="">Notes</label>
      
      <?php if(Route::currentRouteName('') == 'admin.finishes.show'): ?>

	      <div class="p-1 m-0 bg-gray-light">
	         <?php echo $finish->notes; ?>

	      </div>

	   <?php else: ?>

      	<textarea name="notes" id="notes" class="form-control form-control-sm"><?php echo e(old('notes') ?? $finish->notes); ?></textarea>

      <?php endif; ?>
      
      <?php $__errorArgs = ['notes'];
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
   
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/finishes/forms/fields/notes.blade.php ENDPATH**/ ?>