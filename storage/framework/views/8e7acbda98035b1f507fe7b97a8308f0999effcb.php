<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<div class="container pt-2">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card card-trans-2">
					<div class="card-header bg-info">
						<i class="<?php echo e(config('icons.register')); ?>"></i>
						<?php echo e(__('Register')); ?>

					</div>

					<div class="card-body">
						<form method="POST" action="<?php echo e(route('register')); ?>">
							<?php echo csrf_field(); ?>

							<div class="form-group row">
							   <label for="username" class="col-md-4 col-form-label text-md-right required">
							   	<?php echo e(__('Username')); ?>

							   </label>
							 
							   <div class="col-md-6">
							      <input
							        	id="username"
							        	type="text"
							         class="form-control<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>"
							         name="username"
							         value="<?php echo e(old('username')); ?>"
							         required
							         autofocus
							      >
							 
							        <?php if($errors->has('username')): ?>
							            <span class="invalid-feedback">
							                <strong><?php echo e($errors->first('username')); ?></strong>
							            </span>
							        <?php endif; ?>
							    </div>
							</div>

							<div class="form-group row">

								<label for="email" class="col-md-4 col-form-label text-md-right required">
									<?php echo e(__('E-Mail Address')); ?>

								</label>

								<div class="col-md-6">
									<input
										id="email"
										type="email"
										class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
										name="email"
										value="<?php echo e(old('email')); ?>"
										required
										autocomplete="email"
									>

									<?php $__errorArgs = ['email'];
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

							<div class="form-group row">
								
								<label for="password" class="col-md-4 col-form-label text-md-right required">
									<?php echo e(__('Password')); ?>

								</label>
									
								<div class="col-md-6">
									<input
										id="password"
										type="password"
										class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
										name="password"
										required
										autocomplete="new-password"
									>

									<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<span
											class="invalid-feedback"
											role="alert"
										>
											<strong><?php echo e($message); ?></strong>
										</span>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div>
							</div>

							<div class="form-group row">

								<label
									for="password-confirm"
									class="col-md-4 col-form-label text-md-right required"
								>
									<?php echo e(__('Confirm Password')); ?>

								</label>

								<div class="col-md-6">
									<input
										id="password-confirm"
										type="password"
										class="form-control"
										name="password_confirmation"
										required
										autocomplete="new-password"
									>
								</div>
							</div>

							<div class="form-group row">
							   <label for="reasonToRegister" class="col-md-4 col-form-label text-md-right required">
							   	<?php echo e(__('Reason for account request')); ?>

							   </label>
							 
							   <div class="col-md-6">
							      <input
							        	id="reasonToRegister"
							        	type="text"
							         class="form-control<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>"
							         name="reasonToRegister"
							         value="<?php echo e(old('reasonToRegister')); ?>"
							         required
							      >
							 
							        <?php if($errors->has('reasonToRegister')): ?>
							            <span class="invalid-feedback">
							                <strong><?php echo e($errors->first('reasonToRegister')); ?></strong>
							            </span>
							        <?php endif; ?>
							    </div>
							</div>

							<div class="form-group row mb-0">
								<div class="col-md-6 offset-md-4">
									<button
										type="submit"
										class="btn btn-primary"
									>
										<?php echo e(__('Register')); ?>

									</button>
								</div>
							</div>
						</form>
					</div>

					<div class="card-footer">
						All fields are required.
					</div>
				</div>
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-fw', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/auth/register.blade.php ENDPATH**/ ?>