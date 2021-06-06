<!-- PUBLISH DATE -->


<div class="form-group">

   <label for="published_at" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Published On'); ?>

   </label>
   
   <div class="input-group input-group-sm">
	   <input
	      type="text"
	      name="published_at"
	      id="datePicker"
	      class="form-control <?php $__errorArgs = ['published_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
	      value="<?php echo e(old('published_at') ?? $recipe->published_at); ?>"
	      placeholder="Published On"
	      data-inputmask=""
         autocomplete="off"
	   />
	   <div class="input-group-append">
         <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
      </div>
   </div>
   
   <?php $__errorArgs = ['published_at'];
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

<?php /**PATH C:\sites\l7\resources\views/admin/recipes/forms/fields/published_at.blade.php ENDPATH**/ ?>