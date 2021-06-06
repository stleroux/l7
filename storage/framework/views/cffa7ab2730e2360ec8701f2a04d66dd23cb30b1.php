

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.add')); ?>"></i>
   Invoicer :: Register an Activity for Invoice #<?php echo e($invoice->id); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
   <li class="breadcrumb-item">Register Activity</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<form action="<?php echo e(route('admin.invoicer.activities.store', $invoice)); ?>" method="POST">
		<?php echo csrf_field(); ?>
		
		<input type="hidden" name="invoice_id" value="<?php echo e($invoice->id); ?>">

		<?php echo $__env->make('admin.invoicer.activities.create.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="card">
			
			<div class="card-body">

				<div class="row">
					<div class="col-9">
						<div class="row">

							<div class="col-md-3">
								<div class="form-group">
								   <label for="activity" class="required">
								   	Activity Type
								   </label>
								   <select name="activity" id="activity" class="form-control <?php $__errorArgs = ['activity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
								 		<?php $__currentLoopData = $activity->activitiesOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activityOptionKey => $activityOptionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($activityOptionKey); ?>" <?php echo e(old('activity') == $activityOptionKey ? 'selected' : ''); ?>>
												<?php echo e($activityOptionValue); ?>

											</option>
								      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								   </select>
									<span class="text-danger"><?php echo e($errors->first('activity')); ?></span>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group <?php echo e($errors->has('amount') ? 'has-error' : ''); ?>">
									<label for="amount" class="required">Amount</label>
									<input type="text" name="amount" class="form-control" value="<?php echo e(old('amount')); ?>">
									<span class="text-danger"><?php echo e($errors->first('amount')); ?></span>
								</div>
							</div>

							<div class="col-md-9">
								<div class="form-group <?php echo e($errors->has('comment') ? 'has-error' : ''); ?>">
									<label for="comment">Comment</label>
									<textarea name="comment" class="form-control"><?php echo e(old('comment')); ?></textarea>
									<span class="text-danger"><?php echo e($errors->first('comment')); ?></span>
									<small id="passwordHelpBlock" class="form-text text-muted">
									  Provide comment if substracting a value.
									</small>
								</div>
							</div>

						</div>
					</div>

					<div class="col-3">
						<div class="form-group">
							<label for="owed" class="">Owed Amount</label>
							<input type="text" name="owed" class="form-control" value="$ <?php echo e(number_format($invoice->total, 2, '.', ' ')); ?>" readonly>
						</div>
						<div class="form-group">
							<label for="hst" class="">Taxes Amount</label>
							<input type="text" name="hst" class="form-control" value="$ <?php echo e(number_format($invoice->hst, 2, '.', ' ')); ?>" readonly>
						</div>
						<div class="form-group">
							<label for="deposits" class="">Current Deposits</label>
							<input type="text" name="deposits" class="form-control" value="$ <?php echo e(number_format($current_deposits, 2, '.', ' ')); ?>" readonly>
						</div>
						<div class="form-group">
							<label for="discounts" class="">Current Discounts</label>
							<input type="text" name="discounts" class="form-control" value="$ <?php echo e(number_format($current_discounts, 2, '.', ' ')); ?>" readonly>
						</div>
						<div class="form-group">
							<label for="payments" class="">Current Payments</label>
							<input type="text" name="payments" class="form-control" value="$ <?php echo e(number_format($current_payments, 2, '.', ' ')); ?>" readonly>
						</div>
					</div>

				</div>

			</div>

			<div class="card-footer">
				Fields marked with an<span class="required"></span> are required.
			</div>
		</div>

	</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/activities/create/create.blade.php ENDPATH**/ ?>