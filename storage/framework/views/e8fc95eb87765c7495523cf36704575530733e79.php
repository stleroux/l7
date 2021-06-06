

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.invoicer-clients')); ?>"></i>
   Invoicer :: Edit Client
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<form action="<?php echo e(route('admin.invoicer.clients.update', $client)); ?>" method="POST" enctype="multipart/form-data" class="">
		<?php echo csrf_field(); ?>
		<?php echo method_field('PUT'); ?>
		<?php echo $__env->make('admin.invoicer.clients.edit.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="card">

			
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 col-md-8">
						<div class="form-group <?php echo e($errors->has('contact_name') ? 'has-error' : ''); ?>">
							<label for="contact_name" class="required">Contact Name</label>
							<input type="text" name="contact_name" value="<?php echo e($client->contact_name); ?>" class="form-control">
							<span class="text-danger"><?php echo e($errors->first('contact_name')); ?></span>
						</div>
						<div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
							<label for="address">Address</label>
							<input type="text" name="address" value="<?php echo e($client->address); ?>" class="form-control">
							<span class="text-danger"><?php echo e($errors->first('address')); ?></span>
						</div>

						<div class="row">
							<div class="col-sm-12 col-sm-6">
								<div class="form-group <?php echo e($errors->has('city') ? 'has-error' : ''); ?>">
									<label for="city">City</label>
									<input type="text" name="city" value="<?php echo e($client->city); ?>" class="form-control">
									<span class="text-danger"><?php echo e($errors->first('city')); ?></span>
								</div>
							</div>
							<div class="col-sm-12 col-sm-3">
								<div class="form-group <?php echo e($errors->has('state') ? 'has-error' : ''); ?>">
									<label for="state">Province</label>
									<input type="text" name="state" value="<?php echo e($client->state); ?>" class="form-control">
									<span class="text-danger"><?php echo e($errors->first('state')); ?></span>
								</div>
							</div>
							<div class="col-sm-12 col-sm-3">
								<div class="form-group <?php echo e($errors->has('zip') ? 'has-error' : ''); ?>">
									<label for="zip">Postal Code</label>
									<input type="text" name="zip" value="<?php echo e($client->zip); ?>" class="form-control">
									<span class="text-danger"><?php echo e($errors->first('zip')); ?></span>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group <?php echo e($errors->has('notes') ? 'has-error' : ''); ?>">
									<label for="notes">Notes</label>
									<textarea name="notes" rows="3" class="form-control"><?php echo e($client->notes); ?></textarea>
									<span class="text-danger"><?php echo e($errors->first('notes')); ?></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-4">
						<div class="form-group <?php echo e($errors->has('company_name') ? 'has-error' : ''); ?>">
							<label for="company_name">Company Name</label>
							<input type="text" name="company_name" value="<?php echo e($client->company_name); ?>" class="form-control" autofocus="autofocus">
							<span class="text-danger"><?php echo e($errors->first('company_name')); ?></span>
						</div>
						<div class="form-group <?php echo e($errors->has('telephone') ? 'has-error' : ''); ?>">
							<label for="telephone" class="required">Telephone</label>
							<input type="text" name="telephone" value="<?php echo e($client->telephone); ?>" class="form-control">
							<span class="text-danger"><?php echo e($errors->first('telephone')); ?></span>
						</div>
						<div class="form-group <?php echo e($errors->has('cell') ? 'has-error' : ''); ?>">
							<label for="cell">Cell</label>
							<input type="text" name="cell" value="<?php echo e($client->cell); ?>" class="form-control">
							<span class="text-danger"><?php echo e($errors->first('cell')); ?></span>
						</div>
						<div class="form-group <?php echo e($errors->has('fax') ? 'has-error' : ''); ?>">
							<label for="fax">Fax</label>
							<input type="text" name="fax" value="<?php echo e($client->fax); ?>" class="form-control">
							<span class="text-danger"><?php echo e($errors->first('fax')); ?></span>
						</div>
						<div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
							<label for="email" class="required">Email Address</label>
							<input type="text" name="email" value="<?php echo e($client->email); ?>" class="form-control">
							<span class="text-danger"><?php echo e($errors->first('email')); ?></span>
						</div>
						<div class="form-group <?php echo e($errors->has('website') ? 'has-error' : ''); ?>">
							<label for="website">Website</label>
							<input type="text" name="website" value="<?php echo e($client->website); ?>" class="form-control">
							<span class="text-danger"><?php echo e($errors->first('website')); ?></span>
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

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/clients/edit/edit.blade.php ENDPATH**/ ?>