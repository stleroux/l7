

<div class="form-group">
	
   <label for="invoicer_client" class="<?php echo e($required ?? ''); ?>">
   	<?php echo e($label ?? 'Invoicer Client'); ?>

   </label>
   
   <br />
   
   <?php if(Route::currentRouteName('') == 'admin.users.show'): ?>

      <div class="p-1 m-0 bg-gray-light">
         
         <?php echo e(($user->invoicer_client) ? 'Yes' : 'No'); ?>

      </div>

   <?php else: ?>

		<input
		   type="checkbox"
		   name="invoicer_client"
		   id="invoicer_client"
		   class="form-check-input"
		   data-bootstrap-switch
		   data-off-color="danger"
		   data-off-text="No"
		   data-on-color="success"
		   data-on-text="Yes"
		   placeholder="Invoicer Client"
		   data-inputmask=""
		   <?php if($user->invoicer_client || old('invoicer_client')): ?> checked <?php endif; ?>
		   <?php echo e($disabled ?? ''); ?>

		   <?php echo e($readonly ?? ''); ?>

		/>

	<?php endif; ?>

	<?php $__errorArgs = ['invoicer_client'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/forms/fields/invoicer_client.blade.php ENDPATH**/ ?>