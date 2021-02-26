<!-- DART DOUBLEOUT -->

<div class="form-group">

   <label for="dart_doubleOut" class="<?php echo e($required ?? ''); ?>">
      <?php echo e($label ?? 'Dart Double Out'); ?>

   </label>

   <?php if(Route::currentRouteName('') == 'admin.users.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         <?php echo $user->darts_doubleOut; ?>

      </div>

   <?php else: ?>

      <select
         name="dart_doubleOut"
         id="dart_doubleOut"
         class="form-control <?php $__errorArgs = ['dart_doubleOut'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
         title="Preferred double out for Dart games"
         <?php echo e($disabled ?? ''); ?>

      >
         <?php $__currentLoopData = $user->dartOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dartOptionKey => $dartOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($dartOptionKey); ?>" <?php echo e($user->dart_doubleOut == $dartOptionValue ? 'selected' : ''); ?>><?php echo e($dartOptionValue); ?></option>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>

   <?php endif; ?>

   
   <?php $__errorArgs = ['dart_doubleOut'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/forms/fields/dart_doubleOut.blade.php ENDPATH**/ ?>