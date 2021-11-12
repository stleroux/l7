

<?php $__env->startSection('stylesheet'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('css/UI/woodbarn.css')); ?>">
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('pageHeader'); ?>
   Reset Password
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item">Edit Profile</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
   
   <?php echo $__env->make('UI.profile.blocks.contributions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('common.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	<form method="POST" action="<?php echo e(route('profile.resetPwdPost', $user->id)); ?>">
	   <?php echo csrf_field(); ?>

		<div class="col">

			<div class="card card-trans-4 mb-2">

				<div class="card-body p-2">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="form-group">
								<label for="current-password" class="required">Current Password</label>
									<input id="current-password" type="password" class="form-control <?php $__errorArgs = ['current-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="current-password" autofocus="autofocus">
									
									<?php $__errorArgs = ['current-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <span class="invalid-feedback card-trans-4" role="alert">
         <strong><?php echo e($message); ?></strong>
      </span>
   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							</div>

							<div class="form-group<?php echo e($errors->has('new-password') ? ' has-error' : ''); ?>">
								<label for="new-password" class="required">New Password</label>
									<input id="new-password" type="password" class="form-control form-control-sm" name="new-password">
									
							</div>

							<div class="form-group">
								<label for="new-password-confirm" class="required">Confirm New Password</label>
									<input id="new-password-confirm" type="password" class="form-control form-control-sm" name="new-password_confirmation">
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-sm btn-primary">
								<i class="fa fa-save"></i>
								Reset Password
							</button>
				</div>

				<!-- CARD FOOTER -->
	         <div class="card-footer pt-1 pb-1 pl-2">
	            Fields marked with an <span class="required"></span> are required
	         </div>

			</div>
		</div>
	</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.UI.app-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/UI/profile/resetPassword.blade.php ENDPATH**/ ?>