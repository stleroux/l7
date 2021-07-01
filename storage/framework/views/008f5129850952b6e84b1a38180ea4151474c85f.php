

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	<i class="<?php echo e(config('icons.edit')); ?>"></i>
	Invoicer :: Edit 
	<?php if(Str::lower($invoice->status == "estimate")): ?>
		Estimate
	<?php else: ?>
		Invoice 
	<?php endif; ?>
	#<?php echo e($invoice->id); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
	<li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer')); ?>">Invoicer</a></li>
	<li class="breadcrumb-item"><a href="<?php echo e(route('admin.invoicer.invoices')); ?>">Invoices</a></li>
	<li class="breadcrumb-item">Edit Invoice</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightSidebar'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rightColumn'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<form action="<?php echo e(route('admin.invoicer.invoices.update', $invoice->id)); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<?php echo method_field('PUT'); ?>

		<?php echo $__env->make('admin.invoicer.invoices.edit.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="card">
			
			<div class="card-body">
				
				<div class="row">
					
					<div class="col-sm-9">

						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					
						<div class="row">
							
							<?php echo $__env->make('admin.invoicer.invoices.edit.fields.loggedDate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<?php echo $__env->make('admin.invoicer.invoices.edit.fields.estimatedDate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<?php echo $__env->make('admin.invoicer.invoices.edit.fields.invoicedDate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							<?php echo $__env->make('admin.invoicer.invoices.edit.fields.paidDate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						</div>
					</div> <!-- End of col-9 -->

					<div class="col-sm-3">
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.subtotal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.hst', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.payments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.deposits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.discounts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.total', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div><!-- End of col-3 -->

				</div> <!-- End of row -->

			</div><!-- End card-body -->

			<div class="card-footer">
				Fields marked with an<span class="required"></span> are required.
			</div>

		</div>

	</form>

		
	<?php echo $__env->make('admin.invoicer.invoices.edit.billables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php if($invoice->invoiceItems->count() > 0): ?>
		<?php echo $__env->make('admin.invoicer.invoices.edit.activities', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
   $("#datePickerEstimated").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerLogged").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerInvoiced").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/edit.blade.php ENDPATH**/ ?>