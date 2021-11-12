<!-- PICKED UP DATE -->

{{-- @if($invoice->status == 'completed') --}}

	<div class="col-sm-3">

		<div class="form-group {{ $errors->has('pickedUp_at') ? 'has-error' : '' }}">

			<label for="pickedUp_at">Picked Up Date</label>

			<div class="input-group">

				{{-- @if($invoice->shipped_at || $invoice->pickedUp_at)
					<input type="text" name="pickedUp_at" value="{{ $invoice->pickedUp_at }}" class="form-control" readonly />
				@else --}}
					<input
						type="text"
						name="pickedUp_at"
						id="datePickerPickedUp"
						value="{{ $invoice->pickedUp_at }}"
						class="form-control"
						autocomplete="off"
						{{ $readOnly ? 'readonly disabled' : '' }} />
				{{-- @endif --}}

				<div class="input-group-append">
					<span class="input-group-text">
						<i class="far fa-calendar-alt"></i>
					</span>
				</div>

				<span class="text-danger">{{ $errors->first('pickedUp_at') }}</span>

			</div>

			<span><small class="form-text">Ensure you select Picked Up from the Status dropdown</small></span>

		</div>

	</div>

{{-- @endif --}}

