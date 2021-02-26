<!-- STATUS -->

<div class="form-group form-inline {{ $errors->has('status') ? 'has-error' : '' }}">

	<label for="status" class="col-6 control-label required">Status</label>

	@if($invoice->status != 'paid')
	
		<select name="status" class="col-6 form-control pull-right">
	
			<option value="estimate" {{ ($invoice->status == 'estimate' ? 'selected' : '') }}>1- Estimate</option>
			<option value="logged" {{ ($invoice->status == 'logged' ? 'selected' : '') }}>2- Logged</option>

			@if($invoice->invoiceItems->count() > 0)
				<option value="invoiced" {{ ($invoice->status == 'invoiced' ? 'selected' : '') }}>3- Invoiced</option>
			@endif

		</select>
	
	@endif

	@if($invoice->status == 'paid')
		<input type="text" name="paid" class="col-6 form-control text-right" value="Paid" readonly disabled>
	@endif
	
	<span class="text-danger">{{ $errors->first('status') }}</span>

</div>
