<!-- STATUS -->

<div class="form-group form-inline {{ $errors->has('status') ? 'has-error' : '' }}">

	<label for="status" class="col-6 control-label required">Status</label>

@if($invoice->status == 'quote')
	<select name="status" class="col-6 form-control pull-right">
		<option value="quote" {{ ($invoice->status == 'quote' ? 'selected' : '') }}>Quote</option>
		<option value="invoiced">Invoiced</option>
		<option value="canceled">Canceled</option>
	</select>
@endif

@if($invoice->status == 'estimate')
	<select name="status" class="col-6 form-control pull-right">
		<option value="quote">Quote</option>
		<option value="estimate" {{ ($invoice->status == 'estimate' ? 'selected' : '') }}>Estimate</option>
		<option value="invoiced">Invoiced</option>
		<option value="canceled">Canceled</option>
	</select>
@endif

@if($invoice->status == 'invoiced')
	<select name="status" class="col-6 form-control pull-right">
		<option value="estimate">Estimate</option>
		<option value="invoiced" selected>Invoiced</option>
		<option value="paid">Paid</option>
	</select>
@endif

@if($invoice->status == 'paid')
	<select name="status" class="col-6 form-control pull-right">
		<option value="invoiced">Invoiced</option>
		<option value="paid" selected>Paid</option>
		<option value="workOrder">Work Order</option>
		<option value="canceled">Canceled</option>
	</select>
@endif

@if($invoice->status == 'workOrder')
	<select name="status" class="col-6 form-control pull-right">
		<option value="paid">Paid</option>
		<option value="workOrder" selected>Work Order</option>
		<option value="completed">Completed</option>
		<option value="canceled">Canceled</option>
	</select>
@endif

@if($invoice->status == 'completed')
	<select name="status" class="col-6 form-control pull-right">
		<option value="workOrder">Work Order</option>
		<option value="completed" selected>Completed</option>
		<option value="shipped">Shipped</option>
		<option value="pickedUp">Picked Up</option>
		<option value="canceled">Canceled</option>
	</select>
@endif

@if($invoice->status == 'shipped')
	<select name="status" class="col-6 form-control pull-right">
		<option value="completed">Completed</option>
		<option value="shipped" selected>Shipped</option>
		<option value="canceled">Canceled</option>
	</select>
@endif

@if($invoice->status == 'pickedUp')
	<select name="status" class="col-6 form-control pull-right">
		<option value="completed">Completed</option>
		<option value="pickedUp" selected>Picked Up</option>
		<option value="canceled">Canceled</option>
	</select>
@endif

@if($invoice->status == 'canceled')
	<select name="status" class="col-6 form-control pull-right">
		<option value="quote">Quote</option>
		<option value="estimate">Estimate</option>
		<option value="invoiced">Invoiced</option>
		<option value="paid">Paid</option>
		<option value="workOrder">Work Order</option>
		<option value="completed">Completed</option>
		<option value="shipped">Shipped</option>
		<option value="pickedUp">Picked Up</option>
		<option value="canceled" selected disabled>Canceled</option>
	</select>
@endif

{{-- 		<option value="invoiced" {{ ($invoice->status == 'invoiced' ? 'selected' : '') }}>Invoiced</option>
		<option value="paid" {{ ($invoice->status == 'paid' ? 'selected' : '') }}>Paid</option>
		<option value="workOrder" {{ ($invoice->status == 'workOrder' ? 'selected' : '') }}>Work Order</option>
		<option value="completed" {{ ($invoice->status == 'completed' ? 'selected' : '') }}>Completed</option>
		<option value="shipped" {{ ($invoice->status == 'shipped' ? 'selected' : '') }}>Shipped</option>
		<option value="pickup" {{ ($invoice->status == 'pickedUp' ? 'selected' : '') }}>Picked Up</option>
		<option value="canceled" {{ ($invoice->status == 'canceled' ? 'selected' : '') }}>Canceled</option> --}}



	{{-- @if($invoice->status != 'paid')
	
		<select name="status" class="col-6 form-control pull-right">
			@if($invoice->status == 'logged')
				<option value="logged" {{ ($invoice->status == 'logged' ? 'selected' : '') }} readonly >Logged</option>
			@elseif($invoice->status == 'quote')
				<option value="quote" {{ ($invoice->status == 'quote' ? 'selected' : '') }} readonly >Quote</option>
			@endif
			<!-- <option value="quote" {{ ($invoice->status == 'quote' ? 'selected' : '') }}>Quote</option> -->
			<option value="estimate" {{ ($invoice->status == 'estimate' ? 'selected' : '') }}>Estimate</option>
			<option value="invoiced" {{ ($invoice->status == 'invoiced' ? 'selected' : '') }}>Invoiced</option>
		</select>
	
	@endif --}}

{{-- 	@if($invoice->status == 'paid')
		<input type="text" name="paid" class="col-6 form-control text-right" value="Paid" readonly disabled>
	@endif --}}
	
	<span class="text-danger">{{ $errors->first('status') }}</span>

</div>
