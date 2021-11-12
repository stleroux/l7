<!-- CANCELED DATE -->



	<div class="col-sm-3">

		<div class="form-group <?php echo e($errors->has('canceled_at') ? 'has-error' : ''); ?>">

			<label for="canceled_at">Canceled Date</label>

			<div class="input-group">

				
					<input
						type="text"
						name="canceled_at"
						id="datePickerCanceled"
						value="<?php echo e($invoice->canceled_at); ?>"
						class="form-control"
						autocomplete="off"
						<?php echo e($readOnly ? 'readonly disabled' : ''); ?> />
				

				<div class="input-group-append">
					<span class="input-group-text">
						<i class="far fa-calendar-alt"></i>
					</span>
				</div>

				<span class="text-danger"><?php echo e($errors->first('canceled_at')); ?></span>

			</div>

			<span><small class="form-text">Ensure you select Canceled from the Status dropdown</small></span>

		</div>

	</div>


<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/dates/canceled.blade.php ENDPATH**/ ?>