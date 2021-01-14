<?php $__env->startSection('stylesheet'); ?>
	<style>
/* .invalid class prevents CSS from automatically applying */
.invalid input:required:invalid {
  background: #BE4C54;
}

/* Mark valid inputs during .invalid state */
.invalid input:required:valid {
  background: #17D654;
}
	</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.add')); ?>"></i>
   Invoicer :: Create New Invoice
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

	
	<form action="<?php echo e(route('admin.invoicer.invoices.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		
		<?php echo $__env->make('admin.invoicer.invoices.create.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="card">
			

			
			<div class="card-body">
				<div class="row">
					<div class="col-md-9">
						
						<div class="form-group <?php echo e($errors->has('client_id') ? 'has-error' : ''); ?>">
							
							<label for="client_id" class="required">Client</label>
							
							
							
								<select name="client_id" class="form-control">
										<?php if(!empty($client)): ?>
											<option value="<?php echo e($client->id); ?>" ><?php echo e($client->contact_name); ?> :: <?php echo e($client->company_name); ?></option>
										<?php else: ?>
											<option value="" >Select One</option>
										<?php endif; ?>
									<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($c->id); ?>" ><?php echo e($c->contact_name ? $c->contact_name . ' :: ' : ''); ?> <?php echo e($c->company_name); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								
								
								
							
								
							
							<span class="text-danger"><?php echo e($errors->first('client_id')); ?></span>
						</div>

						<div class="form-group <?php echo e($errors->has('notes') ? 'has-error' : ''); ?>">
							
							<label for="notes">Notes</label>
							
							<textarea name="notes" rows="4" class="form-control"></textarea>
							<span class="text-danger"><?php echo e($errors->first('notes')); ?></span>
							<small id="passwordHelpBlock" class="form-text text-muted">
								These notes will not be shown on the invoice
							</small>
						</div>
					</div>
					<div class="col-md-3">
						

						<div class="form-group <?php echo e($errors->has('status') ? 'has-error' : ''); ?>">
							
							<label for="status" class="required">Status</label>
							
							
							<input type="text" name="status" value="logged" class="form-control" readonly >
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

<?php echo $__env->make('admin.invoicer.clients.createModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/invoices/create/create.blade.php ENDPATH**/ ?>