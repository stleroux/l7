

<div class="col-12 col-md-3">
	
	<div class="form-group">

	   <label for="name" class="">UPC Code</label>

	   <?php if(Route::currentRouteName('') == 'admin.materials.show'): ?>

	      <div class="p-1 m-0 bg-gray-light">
	         <?php echo $material->UPC; ?>

	      </div>

	   <?php else: ?>

		   <input
		   	type="text"
		   	name="UPC"
		   	id="UPC"
		   	value="<?php echo e(old('UPC') ?? $material->UPC); ?>"
		   	class="form-control form-control-sm <?php $__errorArgs = ['UPC'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
		   	autofocus
		   />

		<?php endif; ?>
	   
	   <?php $__errorArgs = ['UPC'];
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
<?php /**PATH C:\sites\l7\resources\views/admin/materials/forms/fields/upcCode.blade.php ENDPATH**/ ?>