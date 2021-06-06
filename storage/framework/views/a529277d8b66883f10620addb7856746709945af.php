<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">Invoice Information</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-5">
						<div><strong>Billed To</strong></div>
							<div><?php echo e($invoice->client->company_name ? $invoice->client->company_name : ''); ?></div>
							<div><?php echo e($invoice->client->contact_name); ?></div>
							<div><?php echo e($invoice->client->telephone ? $invoice->client->telephone : ''); ?></div>
							<div><?php echo e($invoice->client->address ? $invoice->client->address : ''); ?></div>
							<div>
								<?php echo e($invoice->client->city ? $invoice->client->city : ''); ?>

								<?php echo e($invoice->client->province ? ', '.$invoice->client->province : ''); ?>

							</div>
							<div><?php echo e($invoice->client->postal_code ? $invoice->client->postal_code : ''); ?></div>
					</div>
					<div class="col-sm-7">
						<div class="row">

						<div class="col text-center">
							<div><strong>Invoice N<sup>o</sup></strong></div>
							<div><?php echo e($invoice->id); ?></div>
						</div>
						<div class="col text-center">
								<div><strong>Estimate Date</strong></div>
								<div><?php echo e($invoice->created_at); ?></div>
							
						</div>
						<div class="col text-center">
							
								<div><strong>Logged Date</strong></div>
								<div><?php echo e($invoice->logged_at); ?></div>
							</div>
						<div class="col text-center">
							
								<div><strong>Invoiced Date</strong></div>
								<div><?php echo e($invoice->invoiced_at); ?></div>
							</div>

						<div class="col text-center">
							<div><strong>Paid Date</strong></div>
								<div><?php echo e($invoice->paid_at); ?></div>
						</div>
						</div>
					</div>
				</div>
				<?php if($invoice->work_description): ?>
					<div class="row">
						<div class="col-sm-12">
							<div class="text-muted">Work Description</div>
							<div class="table" style="padding: 10px"><?php echo e($invoice->work_description); ?></div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/show/inc/top.blade.php ENDPATH**/ ?>