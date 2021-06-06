

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.invoicer-clients')); ?>"></i>
   Invoicer Client Information
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
   <li class="breadcrumb-item">Client Information</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('admin.invoicer.clients.show.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="card">

		<div class="card-body">
			<div class="row">
				<div class="col-sm-12 col-md-8">
					<div class="form-group">
						<label for="owner_name">Contact Name</label>
						<input type="text" name="owner_name" value="<?php echo e($client->contact_name); ?>" class="form-control" readonly />
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" name="" value="<?php echo e($client->address_1); ?>" class="form-control" readonly />
						<?php if($client->address_2): ?>
							<input type="text" name="" value="<?php echo e($client->address_2); ?>" class="form-control" readonly />
						<?php endif; ?>
					</div>

					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="city">City</label>
								<input type="text" name="" value="<?php echo e($client->city); ?>" class="form-control" readonly />
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="form-group">
								<label for="province">Province</label>
								<input type="text" name="" value="<?php echo e($client->province); ?>" class="form-control" readonly />
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="form-group">
								<label for="postal_code">Postal Code</label>
								<input type="text" name="" value="<?php echo e($client->postal_code); ?>" class="form-control" readonly />
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="notes">Notes</label>
								<textarea name="notes" id="notes" rows="4" class="form-control" readonly><?php echo e($client->notes); ?></textarea>
							</div>
						</div>

						<div class="col-sm-12 col-md-3 col-lg-2">
							<div class="form-group">
								<label for="Sales">Total Sales</label>
								<input type="text" name="sales" value="<?php echo e(number_format($client->invoices->sum('sub_total'), 2, '.', ', ')); ?> $" class="form-control text-right" readonly />
							</div>
						</div>

						<div class="col-sm-12 col-md-3 col-lg-2">
							<div class="form-group">
								<label for="discounts">Discounts</label>
								<input type="text" name="discounts" value="<?php echo e(number_format($client->invoices->sum('discounts'), 2, '.', ', ')); ?> $" class="form-control text-right" readonly />
							</div>
						</div>

						<div class="col-sm-12 col-md-3 col-lg-2">
							<div class="form-group">
								<label for="Payments">Payments</label>
								<input type="text" name="payments" value="<?php echo e(number_format($client->invoices->sum('payments') + $client->invoices->sum('deposits'), 2, '.', ', ')); ?> $" class="form-control text-right" readonly />
							</div>
						</div>

						<div class="col-sm-12 col-md-3 col-lg-2">
							<div class="form-group">
								<label for="owing">Total Owing</label>
								<input type="text" name="owing" value="<?php echo e(number_format($client->invoices->sum('total'), 2, '.', ', ')); ?> $" class="form-control text-right" readonly />
							</div>
						</div>

					</div>
				</div>

				<div class="col-sm12 col-md-4">
					<div class="form-group">
						<label for="company_name">Company Name</label>
						<input type="text" name="company_name" value="<?php echo e($client->company_name); ?>" class="form-control" readonly >
					</div>
					<div class="form-group">
						<label for="telephone">Telephone</label>
						<input type="text" name="telephone" value="<?php echo e($client->telephone); ?>" class="form-control" readonly />
					</div>
					<div class="form-group">
						<label for="cell">Cell</label>
						<input type="text" name="cell" value="<?php echo e($client->cell); ?>" class="form-control" readonly />
					</div>
					<div class="form-group">
						<label for="fax">Fax</label>
						<input type="text" name="fax" value="<?php echo e($client->fax); ?>" class="form-control" readonly />
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="text" name="email" value="<?php echo e($client->email); ?>" class="form-control" readonly />
					</div>
					<div class="form-group">
						<label for="website_address">Website Address</label>
						<input type="text" name="website" value="<?php echo e($client->website); ?>" class="form-control" readonly />
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card mt-2">
		<div class="card-header">Related Invoices</div>
		
		<?php if($client->invoices->count() > 0): ?>
			<table class="table table-sm table-hover">
				<thead>
					<tr>
						<th>Status</th>
						<th>N<sup>o</sup></th>
						<th>Create Date</th>
						<th>Amount</th>
						<th>Discounts</th>
						<th>Deposits</th>
						<th>Payments</th>
						<th>Owing</th>
						<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-invoice')): ?>
							<th colspan="4"></th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $client->invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr class="
								<?php echo e(($invoice->total != 0) ? 'text-danger' : ''); ?>

								<?php echo e(($invoice->total == 0) ? 'text-success' : ''); ?>

						">
							<td><?php echo e(ucfirst($invoice->status)); ?></td>
							<td><?php echo e($invoice->id); ?></td>
							<td><?php echo e($invoice->created_at); ?></td>
							<td><?php echo e(number_format($invoice->sub_total, 2, '.', ', ')); ?>$</td>
							<td><?php echo e(number_format($invoice->discounts, 2, '.', ', ')); ?>$</td>
							<td><?php echo e(number_format($invoice->deposits, 2, '.', ', ')); ?>$</td>
							<td><?php echo e(number_format($invoice->payments, 2, '.', ', ')); ?>$</td>
							<td><?php echo e(number_format($invoice->total, 2, '.', ', ')); ?>$</td>
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-invoice')): ?>
								<form action="<?php echo e(route('admin.invoicer.invoices.destroy',[$invoice->id])); ?>" method="POST" onsubmit="return confirm('Do you really want to delete this invoice?');">
									<input type="hidden" name="_method" value="DELETE" />
									<td width="76px">
										<a href="<?php echo e(route('admin.invoicer.invoices.show', $invoice->id)); ?>" class="btn btn-sm btn-outline-primary">
											<i class="fa fa-eye"></i>
											View
										</a>
									</td>
									<td width="70px">
										<?php if($invoice->status != "paid"): ?>
											<a href="<?php echo e(route('admin.invoicer.invoices.edit', $invoice->id)); ?>" class="btn btn-sm btn-primary">
												<i class="fa fa-edit"></i>
												Edit
											</a>
										<?php endif; ?>
									</td>
									<td width="85px">
										<?php if($invoice->status != "paid"): ?>
											<button type="submit" class="btn btn-sm btn-danger">
												<i class="fa fa-trash-alt"></i>
												Delete
											</button>
										<?php endif; ?>
									</td>
								</form>
							<?php endif; ?>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php else: ?>
			<div class="card-body">
				No related invoices found for this client.
			</div>
		<?php endif; ?>
	</div>

	<?php echo $__env->make('common.audits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/clients/show/show.blade.php ENDPATH**/ ?>