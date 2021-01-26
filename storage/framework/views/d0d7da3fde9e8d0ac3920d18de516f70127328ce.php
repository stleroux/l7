<!-- PERSONAL -->
   
<div class="form-group">
   
   <label for="personal" class="col-form-label <?php echo e($required ?? ''); ?>">Make Private</label>
   
   <select name="personal" id="personal" class="form-control form-control-sm <?php $__errorArgs = ['personal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
      <?php $__currentLoopData = $recipe->personalOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personalOptionKey => $personalOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <option value="<?php echo e($personalOptionKey); ?>" <?php echo e($recipe->personal == $personalOptionValue ? 'selected' : ''); ?>><?php echo e($personalOptionValue); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </select>
   
   <?php $__errorArgs = ['personal'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/recipes/form/fields/personal.blade.php ENDPATH**/ ?>