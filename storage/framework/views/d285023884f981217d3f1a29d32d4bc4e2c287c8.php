

<div class="form-group pr-2">

   <label for="prep_time" class="col-form-label <?php echo e($required ?? ''); ?>">Prep Time</label>

   <div class="form-row">
      <div class="col p-0">

         <input
         	type="text"
         	name="prep_time_hours"
         	id="prep_time_hours"
         	value="<?php echo e(old('prep_time_hours') ?? $recipe->prep_time_hours); ?>"
         	class="form-control form-control-sm <?php $__errorArgs = ['prep_time_hours'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         	placeholder="hours"
         />
         <small>Hours</small>

         <?php $__errorArgs = ['prep_time_hours'];
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

      <div class="col p-0">
         
         <input
            type="text"
            name="prep_time_minutes"
            id="prep_time_minutes"
            value="<?php echo e(old('prep_time_minutes') ?? $recipe->prep_time_minutes); ?>"
            class="form-control form-control-sm <?php $__errorArgs = ['prep_time_minutes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            placeholder="minutes"
         />
         <small>Minutes</small>
         
         <?php $__errorArgs = ['prep_time_minutes'];
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

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/recipes/forms/fields/prep_time.blade.php ENDPATH**/ ?>