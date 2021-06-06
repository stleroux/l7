<!-- STATUS -->

<div class="form-group form-inline <?php echo e($errors->has('status') ? 'has-error' : ''); ?>">

	<label for="status" class="col-6 control-label required">Status</label>

	<?php if($invoice->status != 'paid'): ?>
	
		<select name="status" class="col-6 form-control pull-right">
	
			<option value="estimate" <?php echo e(($invoice->status == 'estimate' ? 'selected' : '')); ?>>1- Estimate</option>
			<option value="logged" <?php echo e(($invoice->status == 'logged' ? 'selected' : '')); ?>>2- Logged</option>

			<?php if($invoice->invoiceItems->count() > 0): ?>
				<option value="invoiced" <?php echo e(($invoice->status == 'invoiced' ? 'selected' : '')); ?>>3- Invoiced</option>
			<?php endif; ?>

		</select>
	
	<?php endif; ?>

	<?php if($invoice->status == 'paid'): ?>
		<input type="text" name="paid" class="col-6 form-control text-right" value="Paid" readonly disabled>
	<?php endif; ?>
	
	<span class="text-danger"><?php echo e($errors->first('status')); ?></span>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/status.blade.php ENDPATH**/ ?>