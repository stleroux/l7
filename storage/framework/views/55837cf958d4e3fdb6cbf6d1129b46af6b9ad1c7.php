<!--WORK ORDER DATE -->




	<div class="col-sm-3">

		<div class="form-group <?php echo e($errors->has('workOrder_at') ? 'has-error' : ''); ?>">

			<label for="paid_at">Work Order Date</label>

			<div class="input-group">

				
					<input
						type="text"
						name="workOrder_at"
						id="datePickerWorkOrder"
						value="<?php echo e($invoice->workOrder_at); ?>"
						class="form-control"
						autocomplete="off"
						<?php echo e($readOnly ? 'readonly disabled' : ''); ?> />
				

				<div class="input-group-append">
					<span class="input-group-text">
						<i class="far fa-calendar-alt"></i>
					</span>
				</div>

				<span class="text-danger"><?php echo e($errors->first('workOrder_at')); ?></span>

			</div>

			<span><small class="form-text">Ensure you select Work Order from the Status dropdown</small></span>

		</div>

	</div>


<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/dates/workOrder.blade.php ENDPATH**/ ?>