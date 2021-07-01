

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	<i class="<?php echo e(config('icons.edit')); ?>"></i>
	Invoicer :: Show 
	<?php if($invoice->status == "estimate"): ?>
		Estimate
	<?php else: ?>
		Invoice
	<?php endif; ?>
   # <?php echo e($invoice->id); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
   <li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
	<?php if($invoice->status == "estimate"): ?>
		<li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer.invoices.estimates')); ?>">Estimates</a></li>
	<?php else: ?>
		<li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer.invoices')); ?>">Invoices</a></li>
	<?php endif; ?>
   <li class="breadcrumb-item">Show</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('admin.invoicer.invoices.show.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<div class="card pb-0 mb-3">

		<div class="card-header">
			<?php echo $__env->make('admin.invoicer.invoices.show.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>
		
		<div class="card-body">
			<?php echo $__env->make('admin.invoicer.invoices.show.inc.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php echo $__env->make('admin.invoicer.invoices.show.inc.billables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php echo $__env->make('admin.invoicer.invoices.show.inc.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>

	</div>

	<?php echo $__env->make('common.audits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
				
<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/show/show.blade.php ENDPATH**/ ?>