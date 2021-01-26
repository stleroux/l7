<!-- PUBLIC NOTES -->
   
<div class="form-group">
   
   <label for="public_notes" class="col-form-label <?php echo e($required ?? ''); ?>">Public Notes</label>
   
   <textarea
   	name="public_notes"
   	id="public_notes"
   	rows="2"
   	cols=""
   	class="simple form-control"><?php echo e(old('public_notes') ?? $recipe->public_notes); ?></textarea>
   
   <?php $__errorArgs = ['public_notes'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/forms/fields/public_notes.blade.php ENDPATH**/ ?>