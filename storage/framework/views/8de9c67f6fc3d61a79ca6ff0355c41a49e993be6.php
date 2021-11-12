<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->any(['invoicer-dashboard','invoicer-ledger'])): ?>
	<div class="card p-0">
		<div class="card-header h5 p-1">Invoicer Statistics</div>
		<div class="card-body p-1 m-0">
			
			<div class="row mb-0 p-0">



				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Quotes</div>
						<div class="p-2 text-center">
							<?php echo e(number_format($totalQuotes, 2, '.', ', ')); ?>$
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Estimates</div>
						<div class="p-2 text-center">
							<?php echo e(number_format($totalEstimates, 2, '.', ', ')); ?>$
						</div>
					</div>
				</div>



				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Invoiced</div>
						<div class="p-2 text-center">
							<?php echo e(number_format($totalInvoiced, 2, '.', ', ')); ?>$
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Paid</div>
						<div class="p-2 text-center">
							<?php echo e(number_format($totalPaid, 2, '.', ', ')); ?>$
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Deposits</div>
						<div class="p-2 text-center">
							<?php echo e(number_format($totalDeposits, 2, '.', ', ')); ?>$
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Discounts</div>
						<div class="p-2 text-center">
							<?php echo e(number_format($totalDiscounts, 2, '.', ', ')); ?>$
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Payments</div>
						<div class="p-2 text-center">
							<?php echo e(number_format($totalPayments, 2, '.', ', ')); ?>$
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Total</div>
						<div class="p-2 text-center">
							<?php echo e(number_format($total, 2, '.', ', ')); ?>$
						</div>
					</div>
				</div>
			</div>


			<div class="row mb-0 p-0">
				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Quotes</div>
						<div class="p-2 text-center">
							<?php echo e($quotesCount); ?>

						</div>
					</div>
				</div>
				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Estimates</div>
						<div class="p-2 text-center">
							<?php echo e($estimatesCount); ?>

						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Invoices</div>
						<div class="p-2 text-center">
							<?php echo e($invoicesCount); ?>

						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Billable Items</div>
						<div class="p-2 text-center">
							<?php echo e($billableItemsCount); ?>

						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Clients</div>
						<div class="p-2 text-center">
							<?php echo e($clientsCount); ?>

						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Products</div>
						<div class="p-2 text-center">
							<?php echo e($productsCount); ?>

						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Carvings</div>
						<div class="p-2 text-center">
							<?php echo e($carvingsCount); ?>

						</div>
					</div>
				</div>

				<div class="col-6 col-sm-4 col-md-2 col-xl">
					<div class="card card-primary">
						<div class="card-header p-1 text-center">Items</div>
						<div class="p-2 text-center">
							<?php echo e($otherItemsCount); ?>

						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/dashboard/invoicerStats.blade.php ENDPATH**/ ?>