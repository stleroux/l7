<!-- ESTIMATED DATE -->

<div class="col-sm-3">

	<div class="form-group <?php echo e($errors->has('estimated_at') ? 'has-error' : ''); ?>">

		<label for="estimated_at">Estimated Date</label>

		<div class="input-group">


				<input
					type="text"
					name="estimated_at"
					id="datePickerEstimated"
					value="<?php echo e($invoice->estimated_at); ?>"
					class="form-control"
					autocomplete="off"
					<?php echo e($readOnly ? 'readonly disabled' : ''); ?> />
			

			<div class="input-group-append">
				<span class="input-group-text">
					<i class="far fa-calendar-alt"></i>
				</span>
			</div>

			<span class="text-danger"><?php echo e($errors->first('estimated_at')); ?></span>

		</div>

		<span><small class="form-text">Ensure you select Estimate from the Status dropdown</small></span>

	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/dates/estimated.blade.php ENDPATH**/ ?>