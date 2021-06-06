<!-- INVOICED DATE -->

<div class="col-sm-3">

	<div class="form-group {{ $errors->has('invoiced_at') ? 'has-error' : '' }}">

		<label for="invoiced_at">Invoiced Date</label>

		<div class="input-group">

			@if($invoice->invoiced_at || $invoice->status == 'paid')
				<input type="text" name="invoiced_at" value="{{ $invoice->invoiced_at }}" class="form-control" readonly />
			@else
				<input type="text" name="invoiced_at" id="datePicker" value="{{ $invoice->invoiced_at }}" class="form-control" />
			@endif

			<div class="input-group-append">
				<span class="input-group-text">
					<i class="far fa-calendar-alt"></i>
				</span>
			</div>

			<span class="text-danger">{{ $errors->first('invoiced_at') }}</span>

		</div>

		<span><small class="form-text">Ensure you select Invoiced from the Status dropdown</small></span>

	</div>

</div>
