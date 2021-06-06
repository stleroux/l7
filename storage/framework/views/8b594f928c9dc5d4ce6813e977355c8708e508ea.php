

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.add')); ?>"></i>
   Invoicer :: Add Billable Item to <?php echo e(($invoice->status == 'estimate' ? 'Estimate' : 'Invoice')); ?> : <?php echo e($invoice->id); ?>

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

	<form action="<?php echo e(route('admin.invoicer.invoiceItems.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<input type="hidden" name="invoice_id" value="<?php echo e($invoice->id); ?>">
		
		<?php echo $__env->make('admin.invoicer.invoiceItems.create.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="card">

			<div class="card-body">
				<div class="row">
					
					<div class="col-8">
						<div class="row">
							
							<div class="col-2 border-top border-bottom border-left border-dark bg-dark">
								<div class="h-100 d-flex justify-content-center align-items-center">
									<div class="h2 text-center">
										Select One
										<br />
										OR
										<br />
										Enter Item
									</div>
								</div>
							</div>
							
							<div class="col-10 border-top border-bottom border-right border-dark">
								
								<div class="form-group <?php echo e($errors->has('carving') ? 'has-error' : ''); ?>">
									<label for="carving" class="col-form-label">Carving</label>
									<select name="carving" class="form-control">
										<option value="" autofocus>Select One</option>
										<?php $__currentLoopData = $carvings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carving): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											
											<option value="<?php echo e(ucwords($carving->name)); ?>" <?php if(old('carving') == ucwords($carving->name)): ?> selected <?php endif; ?>><?php echo e(ucwords($carving->name)); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
									<span class="text-danger"><?php echo e($errors->first('carving')); ?></span>
								</div>
								

								<div class="form-group <?php echo e($errors->has('product') ? 'has-error' : ''); ?>">
									<label for="product" class="">Product</label>
									<select name="product" class="form-control">
										<option value="" autofocus>Select One</option>
										<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											
											<option value="<?php echo e(ucwords($product->details)); ?>" <?php if(old('product') == ucwords($product->details)): ?> selected <?php endif; ?>><?php echo e(ucwords($product->details)); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
									<span class="text-danger"><?php echo e($errors->first('product')); ?></span>
								</div>

								<div class="form-group <?php echo e($errors->has('item') ? 'has-error' : ''); ?>">
									<label for="item" class="">Item</label>
									<input type="text" name="item" class="form-control" value="<?php echo e(old('item')); ?>">
									<span class="text-danger"><?php echo e($errors->first('item')); ?></span>
								</div>
								<div class="">If you select more than 1 item, the last one (Item) will be used!</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="form-group <?php echo e($errors->has('notes') ? 'has-error' : ''); ?>">
									<label for="notes">Notes</label>
									<textarea name="notes" rows="4" class="form-control"><?php echo e(old('notes')); ?></textarea>
									<span class="text-danger"><?php echo e($errors->first('notes')); ?></span>
									<small id="passwordHelpBlock" class="form-text text-muted">
										These notes will be shown on the invoice
									</small>
								</div>
							</div>
							
						</div>
					</div>

					<div class="col-4">
						
						<div class="row">
							<div class="col-6">
								<div class="form-group <?php echo e($errors->has('quantity') ? 'has-error' : ''); ?>">
									<label for="quantity" class="required">Quantity</label>
									<input type="number" name="quantity" class="form-control" value="<?php echo e(old('quantity')); ?>">
									<span class="text-danger"><?php echo e($errors->first('quantity')); ?></span>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group <?php echo e($errors->has('price') ? 'has-error' : ''); ?>">
									<label for="price" class="required">Unit Price</label>
									<div class="input-group">
										<input type="text" name="price" value="<?php echo e(old('price')); ?>" class="form-control text-right">
										<div class="input-group-append">
											<span class="input-group-text">$</span>
										</div>
									</div>
									<span class="text-danger"><?php echo e($errors->first('price')); ?></span>
								</div>
							</div>
						</div>

						<div class="row">
							
							
							
							<div class="col-6">
								<div class="form-group <?php echo e($errors->has('work_date') ? 'has-error' : ''); ?>">
									<label for="work_date" class="">Work Date</label>
									<div class="input-group">
										<input type="text" name="work_date" id="datePicker" class="form-control" value="<?php echo e(old('work_date')); ?>">
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

				</div>
			</div>

			<div class="card-footer">
				Fields marked with an<span class="required"></span> are required.
			</div>

		</div>
	
	</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoiceItems/create/create.blade.php ENDPATH**/ ?>