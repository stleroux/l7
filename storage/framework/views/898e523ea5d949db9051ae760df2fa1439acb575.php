

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
<i class="<?php echo e(config('icons.invoicer-clients')); ?>"></i>
Invoicer :: Clients
<?php if(strpos($_SERVER['REQUEST_URI'], 'search?selection=contact') !== false): ?>
&nbsp; [Filtered By Contact]
<?php elseif(strpos($_SERVER['REQUEST_URI'], 'search?selection=company') !== false): ?>
&nbsp; [Filtered By Company]
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
<li class="breadcrumb-item">Clients</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('admin.invoicer.clients.index.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row">
	<div class="col-sm-9">
		<div class="card">
			<?php if($clients->count() > 0): ?>
			<table class="table table-hover table-sm">
				<thead>
					<tr>
						
						<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('last_name','Contact Name'));?></th>
						<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('company_name','Company Name'));?></th>
						<th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('email','Contact Email'));?></th>
						<th>Phone N<supp>o</supp></th>
						<th>Invoices</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						
						<td><?php echo e($client->contact_name); ?></td>
						<td><?php echo e($client->company_name); ?></td>
						<td><?php echo e($client->email); ?></td>
						<td><?php echo e($client->telephone); ?></td>
						<td><?php echo e($client->invoices->count()); ?></td>
						<td>
							
								<form action="<?php echo e(route('admin.invoicer.clients.destroy', $client)); ?>" method="POST" class="">
									<?php echo e(csrf_field()); ?>

									<?php echo e(method_field('DELETE')); ?>

									<input type="hidden" value="<?php echo e($client); ?>" name="id">

									
									<a href="<?php echo e(route('admin.invoicer.invoices.create', [$client->id, 'type'=>'estimate'])); ?>"
										class="btn btn-sm btn-outline-primary"
										data-toggle="tooltip"
										title="Create Estimate"
										>
										
										<i class="fas fa-calculator"></i>
										
									</a>
									<a href="<?php echo e(route('admin.invoicer.invoices.create', $client->id)); ?>"
										class="btn btn-sm btn-outline-primary"
										data-toggle="tooltip"
										title="Create Invoice"
										>
										
										<i class="fas fa-file-invoice-dollar"></i>
										
									</a>
									

									<a href="<?php echo e(route('admin.invoicer.clients.show', $client->id)); ?>"
										class="btn btn-sm btn-outline-primary"
										data-toggle="tooltip"
										title="View Client"
										>
										<i class="fa fa-eye" aria-hidden="true"></i>
										
									</a>

									<a href="<?php echo e(route('admin.invoicer.clients.edit', $client->id)); ?>"
										class="btn btn-sm btn-outline-primary"
										data-toggle="tooltip"
										title="Edit Client"
										>
										<i class="fa fa-edit" aria-hidden="true"></i>
										
									</a>

									
									<button
									type="submit"
									class="btn btn-sm btn-outline-danger"
									onclick="return confirm('Are you sure?')"
									data-toggle="tooltip"
									title="Delete Client"
									<?php echo e($client->invoices->count() > 0 ? 'disabled' : ''); ?>

									>
									<i class="fa fa-trash"></i>
									
								</button>
								

							</form>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			<?php else: ?>
			<div class="card-body">
				No clients found in the system.
			</div>
			<?php endif; ?>

			<?php if($clients->count() > 0): ?>
			<div class="card-footer">
				<div class="row">
					<div class="col-xs-6 text-left">
						Showing records <?php echo e($clients->firstItem()); ?> to <?php echo e($clients->lastItem()); ?> of <?php echo e($clients->total()); ?>

					</div>
					<div class="col-xs-6 text-right">
						<?php echo $clients->appends(request()->except('page'))->render(); ?>

					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<div>
			<small class="text-danger"><b>Note: </b>You are not able to delete a client if they have estimates or invoices in the system.</small>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="card">
			<div class="card-header">
				Filter
			</div>
			<div class="card-body pb-0">
				<form action="<?php echo e(route('admin.invoicer.clients.search')); ?>" class="">
					<div class="form-group">
						<select class="form-control" name="selection">
							<option value="company">Company Name</option>
							<option value="contact">Contact Name</option>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="searchWord">
					</div>
					<div class="form-group text-center">
						<button type="submit" value="Search" class="btn btn-sm btn-primary">
							<i class="fa fa-binoculars" aria-hidden="true"></i>
							Filter
						</button>
						<a href="<?php echo e(route('admin.invoicer.clients')); ?>" class="btn btn-sm btn-outline-secondary">
							<i class="far fa-square"></i>
							Reset
						</a>
					</div>
				</form>
			</div>
			<div class="card-footer">
				Click the Reset button to clear search parameters and display all clients
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/clients/index/index.blade.php ENDPATH**/ ?>