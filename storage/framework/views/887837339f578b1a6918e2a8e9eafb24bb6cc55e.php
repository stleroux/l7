<!-- STATUS -->

<div class="form-group">
   
   <label for="status" class="<?php echo e($required ?? ''); ?>">
   	Status
   </label>
   
   <input type="text" name="status" value="New" class="form-control form-control-sm" readonly />
   
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

</div>



<!-- TITLE -->
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/bugs/create/status.blade.php ENDPATH**/ ?>