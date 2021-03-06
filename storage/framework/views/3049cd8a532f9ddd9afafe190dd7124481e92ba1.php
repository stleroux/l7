

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.invoicer-invoices')); ?>"></i>
	<span class="h3">Invoicer :: Invoices and Estimates
		<?php echo e((Request::is('admin/invoicer/invoices/estimates') ? '- Estimates':'')); ?>

		<?php echo e((Request::is('admin/invoicer/invoices/logged') ? '- Logged':'')); ?>

		<?php echo e((Request::is('admin/invoicer/invoices/invoiced') ? '- Invoiced':'')); ?>

		<?php echo e((Request::is('admin/invoicer/invoices/paid') ? '- Paid':'')); ?>

		<?php echo e((Request::is('admin/invoicer/invoices/unpaid') ? '- Unpaid':'')); ?>

	</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
   <li class="breadcrumb-item">Invoices and Estimates</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('admin.invoicer.invoices.index.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="card">

		<?php if($invoices->count() > 0): ?>
			<table id="" class="table table-hover table-stripped table-sm">
				<thead>
					<tr>
						<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('id','Invoice #'));?></th>
						<?php if(Request::is('admin/invoicer/invoices') || Request::is('admin/invoicer/invoices/unpaid')): ?>
							<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('status','Status'));?></th>
						<?php endif; ?>

						<?php if(Request::is('admin/invoicer/invoices')): ?>
							<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('created_at','Created'));?></th>
							<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('invoiced_at','Invoiced'));?></th>
							<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('paid_at','Paid'));?></th>
						<?php endif; ?>
						<?php if(Request::is('admin/invoicer/invoices/logged')): ?>
							<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('created_at','Logged'));?></th>
						<?php endif; ?>
						<?php if(Request::is('admin/invoicer/invoices/invoiced')): ?>
							<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('invoiced_at','Invoiced'));?></th>
						<?php endif; ?>
						<?php if(Request::is('admin/invoicer/invoices/paid')): ?>
							<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('paid_at','Paid'));?></th>
						<?php endif; ?>
						<?php if(Request::is('admin/invoicer/invoices/unpaid')): ?>
							<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('created_at','Created'));?></th>
							<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('invoiced_at','Invoiced'));?></th>
						<?php endif; ?>

						<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('client.last_name','Last Name'));?></th>
						<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('client.first_name','First Name'));?></th>
						<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('client.company_name','Company Name'));?></th>
						<th class="text-right"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('amount_charged','Charged'));?></th>
						<th class="text-right"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('deposits','Deposits'));?></th>
						<th class="text-right"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('discounts','Discounts'));?></th>
						<th class="text-right"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('payments','Payments'));?></th>
						<th class="text-right"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('total','Owed'));?></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><?php echo e($invoice->id); ?></td>
						<?php if(Request::is('admin/invoicer/invoices') || Request::is('admin/invoicer/invoices/unpaid')): ?>
							<td>
								<?php if($invoice->status === 'estimate'): ?>
									<span class="badge badge-secondary" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
								<?php elseif($invoice->status === 'logged'): ?>
									<span class="badge badge-info" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
								<?php elseif($invoice->status === 'invoiced'): ?>
									<span class="badge badge-warning" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
								<?php else: ?>
									<span class="badge badge-success" style="font-size: 13px"><?php echo e(ucfirst($invoice->status)); ?></span>
								<?php endif; ?>
							</td>
						<?php endif; ?>
						<?php if(Request::is('admin/invoicer/invoices')): ?>
							<td><?php echo e($invoice->created_at); ?></td>
							<td><?php echo e($invoice->invoiced_at); ?></td>
							<td><?php echo e($invoice->paid_at); ?></td>
						<?php endif; ?>

						<?php if(Request::is('admin/invoicer/invoices/logged')): ?>
							<td><?php echo e($invoice->created_at); ?></td>
						<?php endif; ?>
						<?php if(Request::is('admin/invoicer/invoices/invoiced')): ?>
							<td><?php echo e($invoice->invoiced_at); ?></td>
						<?php endif; ?>
						<?php if(Request::is('admin/invoicer/invoices/paid')): ?>
							<td><?php echo e($invoice->paid_at); ?></td>
						<?php endif; ?>
						<?php if(Request::is('admin/invoicer/invoices/unpaid')): ?>
							<td><?php echo e($invoice->created_at); ?></td>
							<td><?php echo e($invoice->invoiced_at); ?></td>
						<?php endif; ?>

						<td>
							<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('invoicer-client')): ?>
								<a href="<?php echo e(route('admin.users.show', $invoice->client->id)); ?>"><?php echo e($invoice->client->last_name); ?></a>
							<?php else: ?>
								<?php echo e($invoice->client->last_name); ?>

							<?php endif; ?>
						</td>

						<td>
							<?php echo e($invoice->client->first_name); ?>							
						</td>

						<td>
							<?php echo e($invoice->client->company_name); ?>

						</td>

						<td class="text-right"><?php echo e(number_format($invoice->sub_total, 2, '.', ', ')); ?>$</td>
						<td class="text-right"><?php echo e(number_format($invoice->deposits, 2, '.', ', ')); ?>$</td>
						<td class="text-right"><?php echo e(number_format($invoice->discounts, 2, '.', ', ')); ?>$</td>
						<td class="text-right"><?php echo e(number_format($invoice->payments, 2, '.', ', ')); ?>$</td>
						<td class="text-right"><?php echo e(number_format($invoice->total, 2, '.', ', ')); ?>$</td>
						<td>
							<form action="<?php echo e(route('admin.invoicer.invoices.destroy',[$invoice->id])); ?>" method="POST" 
								onsubmit="return confirm('Do you really want to delete this invoice and related items?\n\nThis will PERMANENTLY DELETE the invoice and related items.');"
								class="float-right">
								<?php echo e(csrf_field()); ?>


								<?php if($invoice->status == 'estimate'): ?>
									<a href="<?php echo e(route('admin.invoicer.invoices.status_logged', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Mark as Logged">
										
										<i class="<?php echo e(config('icons.invoicer-markAsLogged')); ?>"></i>
										
									</a>
								<?php endif; ?>

								<?php if($invoice->status == 'estimate' || $invoice->status == 'logged'): ?>
									<a href="<?php echo e(route('admin.invoicer.invoices.status_invoiced', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Mark as Invoiced">
										
										<i class="<?php echo e(config('icons.invoicer-markAsInvoiced')); ?>"></i>
										
									</a>
									<a href="<?php echo e(route('admin.invoicer.activities.create', $invoice)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="New Activity">
										
										<i class="<?php echo e(config('icons.invoicer-newActivity')); ?>"></i>
										
									</a>
									<a href="<?php echo e(route('admin.invoicer.invoiceItems.create', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="New Billable">
										
										<i class="<?php echo e(config('icons.invoicer-newBillable')); ?>"></i>
										
									</a>
								<?php endif; ?>

								<?php if($invoice->status == 'invoiced'): ?>
									<a href="<?php echo e(route('admin.invoicer.invoices.status_paid', $invoice->id)); ?>" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Mark as Paid">
										
										<i class="<?php echo e(config('icons.invoicer-markAsPaid')); ?>"></i>
										
									</a>
								<?php endif; ?>

								<?php if(Request::is('admin/invoicer/invoices/estimates')): ?>
									<a href="<?php echo e(route('admin.invoicer.invoices.show', $invoice->id)); ?>" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="View Estimate">
										<i class="<?php echo e(config('icons.view')); ?>"></i>
										
									</a>
								<?php else: ?>
									<a href="<?php echo e(route('admin.invoicer.invoices.show', $invoice->id)); ?>" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="View Invoice">
										<i class="<?php echo e(config('icons.view')); ?>"></i>
										
									</a>
								<?php endif; ?>

								<?php if(!$invoice->paid_at): ?>
									<?php if(Request::is('admin/invoicer/invoices/estimates')): ?>
										<a href="<?php echo e(route('admin.invoicer.invoices.edit', [$invoice->id, 'type'=>'estimate'])); ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit Estimate">
											
											<i class="<?php echo e(config('icons.edit')); ?>"></i>
											
										</a>
									<?php else: ?>
										<a href="<?php echo e(route('admin.invoicer.invoices.edit', $invoice->id)); ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit Invoice">
											<i class="<?php echo e(config('icons.edit')); ?>"></i>
											
										</a>
									<?php endif; ?>
								<?php endif; ?>

								<input type="hidden" name="_method" value="DELETE" />

								<?php if(!$invoice->paid_at): ?>
									<?php if(Request::is('admin/invoicer/invoices/estimates')): ?>
										<button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Estimate">
											<i class="<?php echo e(config('icons.trash')); ?>"></i>
											
										</button>
									<?php else: ?>
										<button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Invoice">
											<i class="<?php echo e(config('icons.trash')); ?>"></i>
											
										</button>
									<?php endif; ?>
								<?php endif; ?>

							</form>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
		<?php else: ?>
			<div class="card-body">
				<?php if(Request::is('admin/invoicer/invoices/estimates')): ?>
					No estimates found in the system.
				<?php else: ?>
					No invoices found in the system.
				<?php endif; ?>
			</div>
		<?php endif; ?>

		<?php if($invoices->count() > 0): ?>
			<div class="card-footer">
				<div class="row">
					<div class="col-sm-6 text-left">
						Showing records <?php echo e($invoices->firstItem()); ?> to <?php echo e($invoices->lastItem()); ?> of <?php echo e($invoices->total()); ?>

					</div>
					<div class="col-sm-6 text-right">
						<?php echo $invoices->appends(request()->except('page'))->render(); ?>

					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/index/index.blade.php ENDPATH**/ ?>