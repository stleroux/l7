<!-- STATUS -->

<div class="form-group form-inline <?php echo e($errors->has('status') ? 'has-error' : ''); ?>">

	<label for="status" class="col-6 control-label required">Status</label>

<?php if($invoice->status == 'quote'): ?>
	<select name="status" class="col-6 form-control pull-right">
		<option value="quote" <?php echo e(($invoice->status == 'quote' ? 'selected' : '')); ?>>Quote</option>
		<option value="invoiced">Invoiced</option>
		<option value="canceled">Canceled</option>
	</select>
<?php endif; ?>

<?php if($invoice->status == 'estimate'): ?>
	<select name="status" class="col-6 form-control pull-right">
		<option value="quote">Quote</option>
		<option value="estimate" <?php echo e(($invoice->status == 'estimate' ? 'selected' : '')); ?>>Estimate</option>
		<option value="invoiced">Invoiced</option>
		<option value="canceled">Canceled</option>
	</select>
<?php endif; ?>

<?php if($invoice->status == 'invoiced'): ?>
	<select name="status" class="col-6 form-control pull-right">
		<option value="estimate">Estimate</option>
		<option value="invoiced" selected>Invoiced</option>
		<option value="paid">Paid</option>
	</select>
<?php endif; ?>

<?php if($invoice->status == 'paid'): ?>
	<select name="status" class="col-6 form-control pull-right">
		<option value="invoiced">Invoiced</option>
		<option value="paid" selected>Paid</option>
		<option value="workOrder">Work Order</option>
		<option value="canceled">Canceled</option>
	</select>
<?php endif; ?>

<?php if($invoice->status == 'workOrder'): ?>
	<select name="status" class="col-6 form-control pull-right">
		<option value="paid">Paid</option>
		<option value="workOrder" selected>Work Order</option>
		<option value="completed">Completed</option>
		<option value="canceled">Canceled</option>
	</select>
<?php endif; ?>

<?php if($invoice->status == 'completed'): ?>
	<select name="status" class="col-6 form-control pull-right">
		<option value="workOrder">Work Order</option>
		<option value="completed" selected>Completed</option>
		<option value="shipped">Shipped</option>
		<option value="pickedUp">Picked Up</option>
		<option value="canceled">Canceled</option>
	</select>
<?php endif; ?>

<?php if($invoice->status == 'shipped'): ?>
	<select name="status" class="col-6 form-control pull-right">
		<option value="completed">Completed</option>
		<option value="shipped" selected>Shipped</option>
		<option value="canceled">Canceled</option>
	</select>
<?php endif; ?>

<?php if($invoice->status == 'pickedUp'): ?>
	<select name="status" class="col-6 form-control pull-right">
		<option value="completed">Completed</option>
		<option value="pickedUp" selected>Picked Up</option>
		<option value="canceled">Canceled</option>
	</select>
<?php endif; ?>

<?php if($invoice->status == 'canceled'): ?>
	<select name="status" class="col-6 form-control pull-right">
		<option value="quote">Quote</option>
		<option value="estimate">Estimate</option>
		<option value="invoiced">Invoiced</option>
		<option value="paid">Paid</option>
		<option value="workOrder">Work Order</option>
		<option value="completed">Completed</option>
		<option value="shipped">Shipped</option>
		<option value="pickedUp">Picked Up</option>
		<option value="canceled" selected disabled>Canceled</option>
	</select>
<?php endif; ?>





	


	
	<span class="text-danger"><?php echo e($errors->first('status')); ?></span>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/status.blade.php ENDPATH**/ ?>