<!-- STATUS -->

<div class="form-group form-inline {{ $errors->has('status') ? 'has-error' : '' }}">

	<label for="status" class="col-6 control-label required">Status</label>

	@if($invoice->status != 'paid')
	
		<select name="status" class="col-6 form-control pull-right">
			@if($invoice->status == 'logged')
				<option value="logged" {{ ($invoice->status == 'logged' ? 'selected' : '') }} readonly >Logged</option>
			@elseif($invoice->status == 'quote')
				<option value="quote" {{ ($invoice->status == 'quote' ? 'selected' : '') }} readonly >Quote</option>
			@endif
			{{-- <option value="quote" {{ ($invoice->status == 'quote' ? 'selected' : '') }}>Quote</option> --}}
			<option value="estimate" {{ ($invoice->status == 'estimate' ? 'selected' : '') }}>Estimate</option>
			<option value="invoiced" {{ ($invoice->status == 'invoiced' ? 'selected' : '') }}>Invoiced</option>
		</select>
	
	@endif

	@if($invoice->status == 'paid')
		<input type="text" name="paid" class="col-6 form-control text-right" value="Paid" readonly disabled>
	@endif
	
	<span class="text-danger">{{ $errors->first('status') }}</span>

</div>
