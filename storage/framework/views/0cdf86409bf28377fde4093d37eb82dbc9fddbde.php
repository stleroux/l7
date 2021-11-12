

<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
	<i class="<?php echo e(config('icons.edit')); ?>"></i>
	Invoicer :: Edit <?php echo e(Str::ucfirst($invoice->status)); ?> #<?php echo e($invoice->id); ?>

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

	<form action="<?php echo e(route('admin.invoicer.invoices.update', $invoice)); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<?php echo method_field('PUT'); ?>

		<?php echo $__env->make('admin.invoicer.invoices.edit.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="card">
			
			<div class="card-body">
				
				<div class="row">
					
					<div class="col-sm-9">

						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					
						<?php if($invoice->status == "quote"): ?>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								
							</div>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						<?php endif; ?>

						<?php if($invoice->status == "estimate"): ?>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						<?php endif; ?>

						<?php if($invoice->status == "invoiced"): ?>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						<?php endif; ?>

						<?php if($invoice->status == "paid"): ?>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.workOrder', ['readOnly'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						<?php endif; ?>

						<?php if($invoice->status == "workOrder"): ?>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.workOrder', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.completed', ['readOnly'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						<?php endif; ?>

						<?php if($invoice->status == "completed"): ?>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.workOrder', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.completed', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.shipped', ['readOnly'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.pickedUp', ['readOnly'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						<?php endif; ?>

						<?php if($invoice->status == "shipped" || $invoice->status == "pickedUp"): ?>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.workOrder', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.completed', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.shipped', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.pickedUp', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						<?php endif; ?>

						<?php if($invoice->status == "canceled"): ?>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.workOrder', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.completed', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
							<div class="row">
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.shipped', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.pickedUp', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<?php echo $__env->make('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>'readonly'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						<?php endif; ?>

					</div> <!-- End of col-9 -->

					<div class="col-sm-3">
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.charged', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.hst', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.subtotal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.payments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.deposits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.discounts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('admin.invoicer.invoices.edit.fields.balance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
					</div><!-- End of col-3 -->

				</div> <!-- End of row -->

			</div><!-- End card-body -->

			<div class="card-footer">
				<?php echo Config::get('settings.formFieldsRequired'); ?>

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
   $("#datePickerInvoiced").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerPaid").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerWorkOrder").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerCompleted").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerShipped").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerPickedUp").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerCanceled").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit.blade.php ENDPATH**/ ?>