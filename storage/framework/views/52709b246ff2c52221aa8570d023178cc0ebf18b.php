<!-- NOTES -->

<div class="form-group <?php echo e($errors->has('notes') ? 'has-error' : ''); ?>">

	<label for="notes">Notes</label>

	<textarea name="notes" rows="4" class="form-control" <?php echo e(($invoice->status == 'paid' ? 'readonly disabled' : '')); ?>><?php echo e($invoice->notes); ?></textarea>

	<span class="text-danger"><?php echo e($errors->first('notes')); ?></span>

	<small id="passwordHelpBlock" class="form-text text-muted">
		These notes will not be shown on invoice
	</small>

</div><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/invoicer/invoices/edit/fields/notes.blade.php ENDPATH**/ ?>