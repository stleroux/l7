<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.edit')); ?>"></i>
   Invoicer :: Edit Invoice #<?php echo e($invoice->id); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer.invoices')); ?>">Invoices</a></li>
   <li class="breadcrumb-item">Edit Invoice</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<form action="<?php echo e(route('admin.invoicer.invoices.update', $invoice->id)); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<?php echo method_field('PUT'); ?>

		<?php echo $__env->make('admin.invoicer.invoices.edit.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="card">
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-9">

						<!-- CLIENT -->
						<div class="form-group <?php echo e($errors->has('client_id') ? 'has-error' : ''); ?>">
							<label for="client_id" class="required">Client</label>
							<select name="client_id" class="form-control">
								<option value="<?php echo e($invoice->client_id); ?>"><?php echo e($invoice->client->company_name); ?></option>
								<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($client->id); ?>"><?php echo e($client->company_name); ?></option>
									}
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<span class="text-danger"><?php echo e($errors->first('client_id')); ?></span>
						</div>

						<!-- NOTES -->
						<div class="form-group <?php echo e($errors->has('notes') ? 'has-error' : ''); ?>">
							<label for="notes">Notes</label>
							<textarea name="notes" rows="4" class="form-control"><?php echo e($invoice->notes); ?></textarea>
							<span class="text-danger"><?php echo e($errors->first('notes')); ?></span>
							<small id="passwordHelpBlock" class="form-text text-muted">
								These notes will not be shown on invoice
							</small>
						</div>
					
						<div class="row">
							<!-- LOGGED DATE -->
							<div class="col-sm-3">
								<div class="form-group">
									<label for="created_at">Logged Date</label>
									<div class="input-group">
										<input type="text" name="created_at" class="form-control" value="<?php echo e($invoice->created_at); ?>" readonly />
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="far fa-calendar-alt"></i>
											</span>
										</div>
									</div>
								</div>
							</div>

							<!-- INVOICED DATE -->
							<div class="col-sm-3">
								<div class="form-group <?php echo e($errors->has('invoiced_at') ? 'has-error' : ''); ?>">
									<label for="invoiced_at">Invoiced Date</label>
									<div class="input-group">
										<?php if($invoice->invoiced_at || $invoice->status == 'paid'): ?>
											<input type="text" name="created_at" value="<?php echo e($invoice->invoiced_at); ?>" class="form-control" readonly />
										<?php else: ?>
											<input type="text" name="invoiced_at" id="datePicker" value="<?php echo e($invoice->invoiced_at); ?>" class="form-control" />
										<?php endif; ?>
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="far fa-calendar-alt"></i>
											</span>
										</div>
										<span class="text-danger"><?php echo e($errors->first('invoiced_at')); ?></span>
									</div>
									<span><small class="form-text">Ensure you select Invoiced from the Status dropdown</small></span>
								</div>
							</div>

							<!-- PAID DATE -->
							<div class="col-sm-3">
								<div class="form-group <?php echo e($errors->has('paid_at') ? 'has-error' : ''); ?>">
									<label for="paid_at">Paid Date</label>
									<div class="input-group">
										<?php if($invoice->paid_at): ?>
											<input type="text" name="created_at" value="<?php echo e($invoice->created_at); ?>" class="form-control" readonly />
										<?php else: ?>
											<input type="text" name="created_at" value="<?php echo e($invoice->paid_at); ?>" class="form-control" />
										<?php endif; ?>
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="far fa-calendar-alt"></i>
											</span>
										</div>
										<span class="text-danger"><?php echo e($errors->first('paid_at')); ?></span>
									</div>
									<span><small class="form-text">Ensure you select Paid from the Status dropdown</small></span>
								</div>
							</div>

						</div>
					</div> <!-- End of col-9 -->

					<div class="col-md-3">

						<!-- STATUS -->
						<div class="form-group form-inline <?php echo e($errors->has('status') ? 'has-error' : ''); ?>">
							<label for="status" class="col-6 control-label required">Status</label>
							<select name="status" class="col-6 form-control pull-right">
								<option value="invoiced" <?php echo e(($invoice->status == 'invoiced' ? 'selected' : '')); ?>>Invoiced</option>
								<option value="logged" <?php echo e(($invoice->status == 'logged' ? 'selected' : '')); ?>>Logged</option>
								<option value="paid" <?php echo e(($invoice->status == 'paid' ? 'selected' : '')); ?>>Paid</option>
							</select>
							<span class="text-danger"><?php echo e($errors->first('status')); ?></span>
						</div>

						<!-- SUB TOTAL -->
						<div class="form-group form-inline">
							<label for="amount_charged" class="col-6">Amount</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="amount_charged"
									value="<?php echo e(number_format($invoice->amount_charged, 2, '.', ' ')); ?>"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

						<!-- HST -->
						<div class="form-group form-inline">
							<label for="hst" class="col-6">HST</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="hst"
									value="<?php echo e(number_format($invoice->hst, 2, '.', ' ')); ?>"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

						<!-- SUB TOTAL -->
						

						<!-- PAYMENTS -->
						<div class="form-group form-inline">
							<label for="amount_charged" class="col-6">Payments</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="amount_charged"
									value="<?php echo e(number_format($invoice->payments, 2, '.', ' ')); ?>"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

						<!-- DEPOSIT -->
						<div class="form-group form-inline">
							<label for="amount_charged" class="col-6">Deposit</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="amount_charged"
									value="<?php echo e(number_format($invoice->deposits, 2, '.', ' ')); ?>"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>


						<!-- DISCOUNT -->
						<div class="form-group form-inline">
							<label for="amount_charged" class="col-6">Discount</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="amount_charged"
									value="<?php echo e(number_format($invoice->discounts, 2, '.', ' ')); ?>"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

						<!-- TOTAL -->
						<div class="form-group form-inline">
							<label for="total" class="col-6">Total Owing</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="total"
									value="<?php echo e(number_format($invoice->total, 2, '.', ' ')); ?>"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

					</div><!-- End of col-3 -->
				</div> <!-- End of row -->
			</div><!-- End card-body -->

			<div class="card-footer">
				Fields marked with an<span class="required"></span> are required.
			</div>
		</div>
	</form>

		
<?php echo $__env->make('admin.invoicer.invoices.edit.billables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if($invoice->invoiceItems->count() > 0): ?>
	<?php echo $__env->make('admin.invoicer.invoices.edit.activities', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>








		


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/invoices/edit/edit.blade.php ENDPATH**/ ?>