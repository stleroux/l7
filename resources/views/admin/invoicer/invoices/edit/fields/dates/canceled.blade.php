<!-- CANCELED DATE -->

{{-- @if($invoice->status == 'completed') --}}

	<div class="col-sm-3">

		<div class="form-group {{ $errors->has('canceled_at') ? 'has-error' : '' }}">

			<label for="canceled_at">Canceled Date</label>

			<div class="input-group">

				{{-- @if($invoice->canceled_at)
					<input type="text" name="canceled_at" value="{{ $invoice->canceled_at }}" class="form-control" readonly />
				@else --}}
					<input
						type="text"
						name="canceled_at"
						id="datePickerCanceled"
						value="{{ $invoice->canceled_at }}"
						class="form-control"
						autocomplete="off"
						{{ $readOnly ? 'readonly disabled' : '' }} />
				{{-- @endif --}}

				<div class="input-group-append">
					<span class="input-group-text">
						<i class="far fa-calendar-alt"></i>
					</span>
				</div>

				<span class="text-danger">{{ $errors->first('canceled_at') }}</span>

			</div>

			<span><small class="form-text">Ensure you select Canceled from the Status dropdown</small></span>

		</div>

	</div>

{{-- @endif --}}
