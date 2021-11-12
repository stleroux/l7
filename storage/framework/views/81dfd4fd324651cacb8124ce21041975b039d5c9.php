<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

<?php if($errors->clientErrors->any()): ?>
	<div class="alert alert-danger text-light px-2">
		<?php echo e(Config::get('settings.formSubmissionError')); ?>

	</div>
<?php endif; ?>

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Create New Client</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<form action="<?php echo e(route('admin.invoicer.clients.store')); ?>" class="needs-validation" novalidate method="POST">
			
				<?php echo csrf_field(); ?>
			
				<div class="modal-body">

					<input type="hidden" name="popup" value="popup">
					
					<div class="form-group">
						<label for="first_name" class="required">First Name</label>
						<input
							type="text"
							name="first_name"
							class="form-control <?php $__errorArgs = ['first_name', 'clientErrors'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
							value="<?php echo e(old('first_name')); ?>">
					   	
						<?php $__errorArgs = ['first_name', 'clientErrors'];
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

					<div class="form-group">
						<label for="last_name" class="required">Last Name</label>
						<input
							type="text"
							name="last_name"
							class="form-control <?php $__errorArgs = ['last_name', 'clientErrors'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
							value="<?php echo e(old('last_name')); ?>">
					   	
						<?php $__errorArgs = ['last_name', 'clientErrors'];
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

					<div class="form-group">
						<label for="company_name">Company Name</label>
						<input
							type="text"
							name="company_name"
							class="form-control <?php $__errorArgs = ['company_name', 'clientErrors'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
							value="<?php echo e(old('company_name')); ?>">
						
						<?php $__errorArgs = ['company_name', 'clientErrors'];
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

					<div class="form-group">
						<label for="email" class="required">Email Address</label>
						<input
							type="text"
							name="email"
							class="form-control <?php $__errorArgs = ['email', 'clientErrors'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
							value="<?php echo e(old('email')); ?>">
						
						<?php $__errorArgs = ['email', 'clientErrors'];
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

					<div class="form-group">
						<label for="telephone" class="required">Telephone</label>
						<input
							type="text"
							name="telephone"
							class="form-control <?php $__errorArgs = ['telephone', 'clientErrors'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
							value="<?php echo e(old('telephone')); ?>"
							data-inputmask="'mask': '(999) 999-9999'">
						
						<?php $__errorArgs = ['telephone', 'clientErrors'];
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
				
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</form>

		</div>

	</div>

</div>

<?php $__env->startSection('scripts'); ?>




<?php if(count($errors->clientErrors) > 0): ?>
<script type="text/javascript">

		$('#exampleModal').modal('show');
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/clients/createModal.blade.php ENDPATH**/ ?>