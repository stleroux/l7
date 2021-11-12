<!-- ESTIMATED DATE -->

<div class="col-sm-3">

	<div class="form-group {{ $errors->has('estimated_at') ? 'has-error' : '' }}">

		<label for="estimated_at">Estimated Date</label>

		<div class="input-group">

{{-- 			@if($invoice->invoiced_at)
				<input type="text" name="estimated_at" value="{{ $invoice->estimated_at }}" class="form-control" readonly />
			@else --}}
				<input
					type="text"
					name="estimated_at"
					id="datePickerEstimated"
					value="{{ $invoice->estimated_at }}"
					class="form-control"
					autocomplete="off"
					{{ $readOnly ? 'readonly disabled' : '' }} />
			{{-- @endif --}}

			<div class="input-group-append">
				<span class="input-group-text">
					<i class="far fa-calendar-alt"></i>
				</span>
			</div>

			<span class="text-danger">{{ $errors->first('estimated_at') }}</span>

		</div>

		<span><small class="form-text">Ensure you select Estimate from the Status dropdown</small></span>

	</div>

</div>
