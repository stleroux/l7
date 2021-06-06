

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.invoicer-products')); ?>"></i>
   Invoicer :: Create Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer.products')); ?>">Products</a></li>
   <li class="breadcrumb-item">Create Product</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('common.form_submission_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	
	<form action="<?php echo e(route('admin.invoicer.products.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>

		<?php echo $__env->make('admin.invoicer.products.create.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="card">
			
			
			
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<div class="form-group <?php echo e($errors->has('code') ? 'has-error' : ''); ?>">
							
							<label for="code" class="required">Code</label>
							
							<input type="text" name="code" class="form-control" autofocus>
							<span class="text-danger"><?php echo e($errors->first('code')); ?></span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-9">
						<div class="form-group <?php echo e($errors->has('details') ? 'has-error' : ''); ?>">
							
							<label for="details" class="required">Details</label>
							
							<input type="text" name="details" class="form-control">
							<span class="text-danger"><?php echo e($errors->first('details')); ?></span>
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

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/products/create/create.blade.php ENDPATH**/ ?>