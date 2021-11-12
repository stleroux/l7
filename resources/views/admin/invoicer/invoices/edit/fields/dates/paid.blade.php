<!-- PAID DATE -->
	
{{-- @if($invoice->status == 'paid') --}}

	<div class="col-sm-3">

		<div class="form-group {{ $errors->has('paid_at') ? 'has-error' : '' }}">

			<label for="paid_at">Paid Date</label>

			<div class="input-group">

				{{-- @if($invoice->paid_at && $invoice->status == "paid")
					<input type="text" name="paid_at" value="{{ $invoice->paid_at }}" class="form-control" readonly />
				@else --}}
					<input
						type="text"
						name="paid_at"
						id="datePickerPaid"
						value="{{ $invoice->paid_at }}"
						class="form-control"
						autocomplete="off"
						{{ $readOnly ? 'readonly disabled' : '' }} />
				{{-- @endif --}}

				<div class="input-group-append">
					<span class="input-group-text">
						<i class="far fa-calendar-alt"></i>
					</span>
				</div>

				<span class="text-danger">{{ $errors->first('paid_at') }}</span>

			</div>

			<span><small class="form-text">Ensure you select Paid from the Status dropdown</small></span>

		</div>

	</div>

{{-- @endif --}}
