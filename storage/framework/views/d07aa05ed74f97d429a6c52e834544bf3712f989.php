<!-- DEPOSITS -->

<div class="form-group form-inline">

	<label for="amount_charged" class="col-6">Deposits</label>

	<div class="input-group col-6 p-0">

		<input
			type="text"
			name="amount_charged"
			value="<?php echo e(number_format($invoice->deposits, 2, '.', ' ')); ?>"
			class="form-control text-right"
			readonly
		/>

		<div class="input-group-append">
			<span class="input-group-text">$</span>
		</div>

	</div>

</div>
<?php /**PATH C:\sites\l7\resources\views/admin/invoicer/invoices/edit/fields/deposits.blade.php ENDPATH**/ ?>