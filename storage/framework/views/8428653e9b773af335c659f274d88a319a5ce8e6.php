

<div class="form-group">

   <label for="servings" class="col-form-label <?php echo e($required ?? ''); ?>">Servings</label>

   <input
   	type="number"
   	name="servings"
   	id="servings"
   	value="<?php echo e(old('servings') ?? $recipe->servings); ?>"
   	class="form-control form-control-sm <?php $__errorArgs = ['servings'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
   />
   
   <?php $__errorArgs = ['servings'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/forms/fields/servings.blade.php ENDPATH**/ ?>