<!-- PAID DATE -->
	
<?php if($invoice->status == 'paid'): ?>

	<div class="col-sm-3">

		<div class="form-group <?php echo e($errors->has('paid_at') ? 'has-error' : ''); ?>">

			<label for="paid_at">Paid Date</label>

			<div class="input-group">

				<?php if($invoice->paid_at): ?>
					<input type="text" name="paid_at" value="<?php echo e($invoice->paid_at); ?>" class="form-control" readonly />
				<?php else: ?>
					<input type="text" name="paid_at" id="datePickerPaid" value="<?php echo e($invoice->paid_at); ?>" class="form-control" />
				<?php endif; ?>

				<div class="input-group-append">
					<span class="input-group-text">
						<i class="far fa-calendar-alt"></i>
					</span>
				</div>

				<span class="text-danger"><?php echo e($errors->first('paid_at')); ?></span>

			</div>

			<span><small class="form-text">Ensure you select Paid from the Status dropdown</small></span>

		</div>

	</div>

<?php endif; ?>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/paidDate.blade.php ENDPATH**/ ?>