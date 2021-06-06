<!-- LOGGED DATE -->

<div class="col-sm-3">

	<div class="form-group {{ $errors->has('logged_at') ? 'has-error' : '' }}">

		<label for="logged_at">Logged Date</label>

		<div class="input-group">

			@if($invoice->logged_at || $invoice->status == 'paid')
				<input type="text" name="logged_at" value="{{ $invoice->logged_at }}" class="form-control" readonly />
			@else
				<input type="text" name="logged_at" id="datePicker" value="{{ $invoice->logged_at }}" class="form-control" />
			@endif

			<div class="input-group-append">
				<span class="input-group-text">
					<i class="far fa-calendar-alt"></i>
				</span>
			</div>

			<span class="text-danger">{{ $errors->first('logged_at') }}</span>

		</div>

		<span><small class="form-text">Ensure you select Logged from the Status dropdown</small></span>

	</div>

</div>
