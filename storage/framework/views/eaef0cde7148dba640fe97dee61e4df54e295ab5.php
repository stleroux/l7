

<div class="form-group">

	<label for="public_email" class="<?php echo e($required ?? ''); ?>">
		<?php echo e($label ?? 'Is Email Prublic?'); ?>

	</label>

	<br />
	
	<input
	   type="checkbox"
	   name="public_email"
	   id="public_email"
	   class="form-control"
	   data-bootstrap-switch
	   data-off-color="danger"
	   data-off-text="Private"
	   data-on-color="success"
	   data-on-text="Public"
	   placeholder="public"
	   data-inputmask=""
	   <?php if($user->public_email || old('public_email')): ?> checked <?php endif; ?>
	   <?php echo e($disabled ?? ''); ?>

	/>

	<?php $__errorArgs = ['public_email'];
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/users/forms/fields/public_email.blade.php ENDPATH**/ ?>