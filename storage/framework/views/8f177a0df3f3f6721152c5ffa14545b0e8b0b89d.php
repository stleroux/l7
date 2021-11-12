<!-- NOTE -->

<div class="form-group">

   <label for="notes" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Notes'); ?>

   </label>
   
   <?php if(Route::currentRouteName('') == 'admin.users.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $user->notes; ?>

      </div>

   <?php else: ?>

      <textarea
      	name="notes"
      	id="notes"
      	class="form-control"
      	rows="2"
      	data-autosize
      	placeholder="Notes"
         data-inputmask=""
         <?php echo e($disabled ?? ''); ?>><?php echo e(old('notes') ?? $user->notes); ?></textarea>

   <?php endif; ?>

   <?php $__errorArgs = ['notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div class="text-danger" role="alert">
         <small><?php echo e($message); ?></small>
      </div>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/users/forms/fields/notes.blade.php ENDPATH**/ ?>