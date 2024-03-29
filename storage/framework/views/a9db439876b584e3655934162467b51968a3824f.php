

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	<i class="<?php echo e(config('icons.edit')); ?>"></i>
	Invoicer :: Show 
	<?php if($invoice->status == 'quote' || $invoice->status == 'estimate'): ?>
		<?php echo e(Str::ucfirst($invoice->status)); ?>

	<?php else: ?>
		Invoice
	<?php endif; ?>
	 # <?php echo e($invoice->id); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>

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

	

<?php $__env->stopSection(); ?>
				
<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/show.blade.php ENDPATH**/ ?>