<!-- METHODOLOGY -->

<div class="form-group">

   <label for="methodology" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Methodology'); ?>

   </label>
   
   <textarea
   	name="methodology"
   	id="methodology"
   	rows="8"
   	class="simple form-control form-control-sm <?php $__errorArgs = ['methodology'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('methodology') ?? $recipe->methodology); ?></textarea>
   
   <?php $__errorArgs = ['methodology'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/form/fields/methodology.blade.php ENDPATH**/ ?>