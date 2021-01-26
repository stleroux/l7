<!-- SHEEN -->

<div class="col-12 col-md-3">
   
   <div class="form-group">
      
      <label for="sheen" class="">Sheen</label>
      
      <?php if(Route::currentRouteName('') == 'admin.finishes.show'): ?>

         <div class="p-1 m-0 bg-gray-light">
            <?php echo $finish->sheen; ?>

         </div>

      <?php else: ?>

         <select name="sheen" id="sheen" class="form-control form-control-sm <?php $__errorArgs = ['sheen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <?php $__currentLoopData = $finish->sheenOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sheenOptionKey => $sheenOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <option value="<?php echo e($sheenOptionKey); ?>" <?php echo e($finish->sheen == $sheenOptionValue ? 'selected' : ''); ?>><?php echo e($sheenOptionValue); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </select>

      <?php endif; ?>
      
      <?php $__errorArgs = ['sheen'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/finishes/forms/fields/sheen.blade.php ENDPATH**/ ?>