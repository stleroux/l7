<!-- STATUS -->

<div class="form-group">
   
   <label for="status" class="<?php echo e($required ?? ''); ?>">
   	Status
   </label>
   
   <?php if(Route::currentRouteName('') == 'admin.bugs.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $bug->status; ?>

      </div>

   <?php else: ?>

      <select name="status" id="status" class="form-control form-control-sm <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
         <?php $__currentLoopData = $bug->statusOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $statusOptionKey => $statusOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($statusOptionKey); ?>" <?php echo e($bug->status == $statusOptionValue ? 'selected' : ''); ?>><?php echo e($statusOptionValue); ?></option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>

   <?php endif; ?>
   
   <?php $__errorArgs = ['status'];
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

</div><?php /**PATH C:\sites\l7\resources\views/admin/bugs/forms/fields/status.blade.php ENDPATH**/ ?>