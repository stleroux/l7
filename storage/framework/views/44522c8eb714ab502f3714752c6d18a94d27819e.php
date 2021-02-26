<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.add')); ?>"></i>
   Invoicer :: Edit Billable Item on Invoice : <?php echo e($item->invoice_id); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer.invoices')); ?>">Invoices</a></li>
   <li class="breadcrumb-item">Edit Billable Item</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	
	<form action="<?php echo e(route('admin.invoicer.invoiceItems.update', $item->id)); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<?php echo method_field('PUT'); ?>
		
		<input type="hidden" name="invoice_id" value="<?php echo e($item->invoice->id); ?>">

		<?php echo $__env->make('admin.invoicer.invoiceItems.edit.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="card">
			
			<div class="card-header">
				<span class="h3">Edit Billable Item</span>
				<span class="float-right">
					
				</span>
			</div>
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-8">
						
						<label for="product">Product</label>
						<input type="text" name="product" class="form-control" value="<?php echo e($item->product); ?>">
					</div>
					<div class="col-sm-2">
						<div class="form-group <?php echo e($errors->has('quantity') ? 'has-error' : ''); ?>">
							<label for="quantity" class="required">Quantity</label>
							<input type="text" name="quantity" class="form-control" value="<?php echo e($item->quantity); ?>">
							<span class="text-danger"><?php echo e($errors->first('quantity')); ?></span>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group <?php echo e($errors->has('price') ? 'has-error' : ''); ?>">
							<label for="price" class="required">Unit Price</label>
							<div class="input-group">
								<input type="text" name="price" class="form-control text-right" value="<?php echo e($item->price); ?>">
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
							<span class="text-danger"><?php echo e($errors->first('price')); ?></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8">
						<div class="form-group <?php echo e($errors->has('notes') ? 'has-error' : ''); ?>">
							<label for="notes">Notes</label>
							<textarea name="notes" rows="4" class="form-control"><?php echo e($item->notes); ?></textarea>
							<span class="text-danger"><?php echo e($errors->first('notes')); ?></span>
							<small id="passwordHelpBlock" class="form-text text-muted">
								These notes will be shown on the invoice
							</small>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group <?php echo e($errors->has('work_date') ? 'has-error' : ''); ?>">
							<label for="work_date" class="required">Work Date</label>
							<div class="input-group">
								<input type="text" name="work_date" id="datePicker" class="form-control" value="<?php echo e(Carbon\Carbon::parse($item->work_date)->format('Y-m-d')); ?>" autocomplete="off">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="far fa-calendar-alt"></i>
									</span>
								</div>
							</div>
							<span class="text-danger"><?php echo e($errors->first('work_date')); ?></span>
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

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/invoiceItems/edit/edit.blade.php ENDPATH**/ ?>