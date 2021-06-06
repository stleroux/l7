<!-- LOGGED DATE -->

<div class="col-sm-3">

	<div class="form-group <?php echo e($errors->has('logged_at') ? 'has-error' : ''); ?>">

		<label for="logged_at">Logged Date</label>

		<div class="input-group">

			<?php if($invoice->logged_at || $invoice->status == 'paid'): ?>
				<input type="text" name="logged_at" value="<?php echo e($invoice->logged_at); ?>" class="form-control" readonly />
			<?php else: ?>
				<input type="text" name="logged_at" id="datePicker" value="<?php echo e($invoice->logged_at); ?>" class="form-control" />
			<?php endif; ?>

			<div class="input-group-append">
				<span class="input-group-text">
					<i class="far fa-calendar-alt"></i>
				</span>
			</div>

			<span class="text-danger"><?php echo e($errors->first('logged_at')); ?></span>

		</div>

		<span><small class="form-text">Ensure you select Logged from the Status dropdown</small></span>

	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/loggedDate.blade.php ENDPATH**/ ?>