

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.invoicer-ledger')); ?>"></i>
	<span class="h3">Invoicer :: Ledger
		<?php echo e((Request::is('admin/invoicer/ledger/estimates') ? '- Estimates':'')); ?>

		<?php echo e((Request::is('admin/invoicer/ledger/logged') ? '- Logged':'')); ?>

		<?php echo e((Request::is('admin/invoicer/ledger/invoiced') ? '- Invoiced':'')); ?>

		<?php echo e((Request::is('admin/invoicer/ledger/paid') ? '- Paid':'')); ?>

		<?php echo e((Request::is('admin/invoicer/ledger/unpaid') ? '- Unpaid':'')); ?>

	</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
   <li class="breadcrumb-item">Ledger</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('admin.invoicer.ledger.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="card">

			<?php if($invoices->count() > 0): ?>
				<table class="table table-hover table-stripped table-sm">
					<thead>
						<tr>
							<th>#</th>
							<?php if(Request::is('admin/invoicer/ledger/estimates')): ?>
								<th>Create Date</th>
							<?php endif; ?>
							<?php if(Request::is('admin/invoicer/ledger/logged')): ?>
								<th>Logged Date</th>
							<?php endif; ?>
							<?php if(Request::is('admin/invoicer/ledger/invoiced')): ?>
								<th>Invoiced Date</th>
							<?php endif; ?>
							<?php if(Request::is('admin/invoicer/ledger/paid')): ?>
								<th>Paid Date</th>
							<?php endif; ?>
							<?php if(Request::is('admin/invoicer/ledger')): ?>
								<th>Status</th>
							<?php endif; ?>
							
							<th>Last Name</th>
							<th>First Name</th>
							<th>Company Name</th>
							<th class="text-right">Charge</th>
							<th class="d-none d-md-table-cell text-right">HST</th>
							<th class="d-none d-md-table-cell text-right">Deposits</th>
							<th class="d-none d-md-table-cell text-right">Discounts</th>
							<th class="d-none d-md-table-cell text-right">Payments</th>
							
							
							
							
							<th class="text-right">Owed</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="bg-info">
							<td colspan="<?php echo e((Request::is('admin/invoicer/ledger/unpaid') ? '4' : '5')); ?>" class="text-right"><b>Totals This Page :&nbsp;</b></td>
							<td class="text-right"><?php echo e(number_format($invoices->sum('amount_charged'), 2, '.', ', ')); ?>$</td>
							<td class="d-none d-md-table-cell text-right"><?php echo e(number_format($invoices->sum('hst'), 2, '.', ', ')); ?>$</td>
							<td class="d-none d-md-table-cell text-right"><?php echo e(number_format($invoices->sum('deposits'), 2, '.', ', ')); ?>$</td>
							<td class="d-none d-md-table-cell text-right"><?php echo e(number_format($invoices->sum('discounts'), 2, '.', ', ')); ?>$</td>
							<td class="d-none d-md-table-cell text-right"><?php echo e(number_format($invoices->sum('payments'), 2, '.', ', ')); ?>$</td>
							
							
							
							<td class="text-right"><?php echo e(number_format($invoices->sum('total'), 2, '.', ', ')); ?>$</td>
						</tr>
						<tr class="bg-info">
							<td colspan="<?php echo e((Request::is('admin/invoicer/ledger/unpaid') ? '4' : '5')); ?>" class="text-right"><b>Overall Totals :&nbsp;</b></td>
							<td class="text-right"><?php echo e(number_format($amountCharged, 2, '.', ', ')); ?>$</td>
							<td class="d-none d-md-table-cell text-right"><?php echo e(number_format($hst, 2, '.', ', ')); ?>$</td>
							<td class="d-none d-lg-table-cell text-right"><?php echo e(number_format($deposits, 2, '.', ', ')); ?>$</td>
							<td class="d-none d-lg-table-cell text-right"><?php echo e(number_format($discounts, 2, '.', ', ')); ?>$</td>
							<td class="d-none d-sm-table-cell text-right"><?php echo e(number_format($payments, 2, '.', ', ')); ?>$</td>
							<td class="text-right"><?php echo e(number_format($total, 2, '.', ', ')); ?>$</td>
						</tr>
					</tfoot>
					<tbody>
						<?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td>
								<a href="<?php echo e(route('admin.invoicer.invoices.show', $invoice->id)); ?>"><?php echo e($invoice->id); ?>

							</td>
							
							<?php if(Request::is('admin/invoicer/ledger/estimates')): ?>
								<td><?php echo e($invoice->created_at); ?></td>
							<?php endif; ?>
							<?php if(Request::is('admin/invoicer/ledger/logged')): ?>
								<td><?php echo e($invoice->created_at); ?></td>
							<?php endif; ?>
							<?php if(Request::is('admin/invoicer/ledger/invoiced')): ?>
								<td><?php echo e($invoice->invoiced_at); ?></td>
							<?php endif; ?>
							<?php if(Request::is('admin/invoicer/ledger/paid')): ?>
								<td><?php echo e($invoice->paid_at); ?></td>
							<?php endif; ?>
							<?php if(Request::is('admin/invoicer/ledger')): ?>
								<td>
									<?php if($invoice->status === 'quote'): ?>
										<span class="badge badge-steel" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
									<?php elseif($invoice->status === 'estimate'): ?>
										<span class="badge badge-info" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
									<?php elseif($invoice->status === 'invoiced'): ?>
										<span class="badge badge-warning" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
									<?php elseif($invoice->status === 'paid'): ?>
										<span class="badge badge-success" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
									<?php endif; ?>
								</td>
							<?php endif; ?>
							
							<td>
								<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-client')): ?>
									<a href="<?php echo e(route('admin.users.show', $invoice->client_id)); ?>"><?php echo e($invoice->client->last_name); ?></a>
								<?php else: ?>
									<?php echo e($invoice->client->last_name); ?>

								<?php endif; ?>
							</td>
							
							<td>
								<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-client')): ?>
									<a href="<?php echo e(route('admin.users.show', $invoice->client_id)); ?>"><?php echo e($invoice->client->first_name); ?></a>
								<?php else: ?>
									<?php echo e($invoice->client->first_name); ?>

								<?php endif; ?>
							</td>
							
							<td>
								<?php echo e($invoice->client->company_name); ?>

							</td>
							
							<td class="text-right"><?php echo e(number_format($invoice->amount_charged, 2, '.' , ', ')); ?>$</td>
							
							<td class="d-none d-md-table-cell text-right"><?php echo e(number_format($invoice->hst, 2, '.' , ', ')); ?>$</td>
							
							<td class="d-none d-lg-table-cell text-right">
								<?php
									$depositAdd = DB::table('invoicer__activities')->where('activity', 'depositAdd')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount'));
									$depositRemove = DB::table('invoicer__activities')->where('activity', 'depositRemove')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount'));
									$depositTotal = $depositAdd - $depositRemove;

								?>
								


								
																				<?php echo e(number_format($depositTotal, 2, '.' , ', ')); ?>$
																				



							</td>
							<td class="d-none d-lg-table-cell text-right">
								<?php
									$discountAdd = DB::table('invoicer__activities')->where('activity', 'discountAdd')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount'));
									$discountRemove = DB::table('invoicer__activities')->where('activity', 'discountRemove')
																				->where('invoice_id', $invoice->id)
																				->sum(\DB::raw('invoicer__activities.amount'));
									$discountTotal = $discountAdd - $discountRemove;
								?>
								
								
								<?php echo e(number_format($discountTotal, 2, '.' , ', ')); ?>$
								
							</td>
							<td class="d-none d-lg-table-cell text-right">
								<?php
									$paymentAdd = DB::table('invoicer__activities')->where('activity', 'paymentAdd')
									   										->where('invoice_id', $invoice->id)
								   											->sum(\DB::raw('invoicer__activities.amount'));
									$paymentRemove = DB::table('invoicer__activities')->where('activity', 'paymentRemove')
																				->where('invoice_id', $invoice->id)
								   											->sum(\DB::raw('invoicer__activities.amount'));
									$paymentTotal = $paymentAdd - $paymentRemove;
								?>
								
								<?php echo e(number_format($paymentTotal, 2, '.' , ', ')); ?>$



							</td>
								
								
							
							<td class="text-right"><?php echo e(number_format($invoice->total, 2, '.' , ', ')); ?>$</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			<?php else: ?>
				<div class="card-body">
					No records found in the system.
				</div>
			<?php endif; ?>

		<?php if($invoices->count() > 0): ?>
			<div class="card-footer p-2">
				<div class="row d-flex">
					<div class="col">
						Showing records <?php echo e($invoices->firstItem()); ?> to <?php echo e($invoices->lastItem()); ?> of <?php echo e($invoices->total()); ?>

					</div>
					<div class="col d-flex justify-content-end">
						<?php echo $invoices->appends(request()->except('page'))->render(); ?>

					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/ledger/index.blade.php ENDPATH**/ ?>