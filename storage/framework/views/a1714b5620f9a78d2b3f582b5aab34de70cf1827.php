<!-- STATUS -->

<div class="form-group form-inline <?php echo e($errors->has('status') ? 'has-error' : ''); ?>">

	<label for="status" class="col-6 control-label required">Status</label>

	<?php if($invoice->status != 'paid'): ?>
	
		<select name="status" class="col-6 form-control pull-right">
			<?php if($invoice->status == 'logged'): ?>
				<option value="logged" <?php echo e(($invoice->status == 'logged' ? 'selected' : '')); ?> readonly >Logged</option>
			<?php elseif($invoice->status == 'quote'): ?>
				<option value="quote" <?php echo e(($invoice->status == 'quote' ? 'selected' : '')); ?> readonly >Quote</option>
			<?php endif; ?>
			
			<option value="estimate" <?php echo e(($invoice->status == 'estimate' ? 'selected' : '')); ?>>Estimate</option>
			<option value="invoiced" <?php echo e(($invoice->status == 'invoiced' ? 'selected' : '')); ?>>Invoiced</option>
		</select>
	
	<?php endif; ?>

	<?php if($invoice->status == 'paid'): ?>
		<input type="text" name="paid" class="col-6 form-control text-right" value="Paid" readonly disabled>
	<?php endif; ?>
	
	<span class="text-danger"><?php echo e($errors->first('status')); ?></span>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/status.blade.php ENDPATH**/ ?>