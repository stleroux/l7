

<?php $__env->startSection('stylesheet'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <?php if(request()->has('type')): ?>
   	<i class="<?php echo e(config('icons.invoicer-estimates')); ?>"></i>
   	Invoicer :: Create New Estimate
   <?php else: ?>
   	<i class="<?php echo e(config('icons.invoicer-invoices')); ?>"></i>
   	Invoicer :: Create New Invoice
   <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
   <li class="breadcrumb-item">Create Invoice</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>
	

<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('admin.invoicer.clients.createModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	
	<form action="<?php echo e(route('admin.invoicer.invoices.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		
		<?php echo $__env->make('admin.invoicer.invoices.create.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


		<div class="card">
			
			<div class="card-body">
				<div class="row">
					<div class="col-md-9">
						
						<div class="form-group">
							<label for="client_id" class="required">Client</label>
							<select name="client_id" class="form-control <?php $__errorArgs = ['client_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
								<?php if(!empty($client)): ?>
									<option value="<?php echo e($client->id); ?>" >
										<?php echo e($client->contact_name); ?> :: <?php echo e($client->email); ?> :: <?php echo e($client->company_name); ?>

									</option>
								<?php else: ?>
									<option value="">Select One</option>
								<?php endif; ?>
								<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($c->id); ?>" >
										<?php echo e($c->contact_name); ?> :: <?php echo e($c->email); ?> <?php echo e($c->company_name ? ' :: ' . $c->company_name . '' : ''); ?>

									</option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							
							<?php $__errorArgs = ['client_id'];
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
							<label for="notes">Notes</label>
							<textarea name="notes" rows="4" class="form-control"></textarea>
							<span class="text-danger"><?php echo e($errors->first('notes')); ?></span>
							<small id="passwordHelpBlock" class="form-text text-muted">
								These notes will not be shown on the invoice
							</small>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="status" class="required">Status</label>
							
							<?php if(request()->has('type')): ?>
								<input type="text" name="status" value="Estimate" class="form-control" readonly >
							<?php else: ?>
								<input type="text" name="status" value="Logged" class="form-control" readonly >
							<?php endif; ?>

							<span class="text-danger"><?php echo e($errors->first('status')); ?></span>
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

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/create/create.blade.php ENDPATH**/ ?>