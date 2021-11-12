<!-- SHIPPED DATE -->

{{-- @if($invoice->status == 'completed') --}}

	<div class="col-sm-3">

		<div class="form-group {{ $errors->has('shipped_at') ? 'has-error' : '' }}">

			<label for="shipped_at">Shipped Date</label>

			<div class="input-group">

				{{-- @if($invoice->shipped_at || $invoice->pickedUp_at)
					<input type="text" name="shipped_at" value="{{ $invoice->shipped_at }}" class="form-control" readonly />
				@else --}}
					<input
						type="text"
						name="shipped_at"
						id="datePickerShipped"
						value="{{ $invoice->shipped_at }}"
						class="form-control"
						autocomplete="off"
						{{ $readOnly ? 'readonly disabled' : '' }} />
				{{-- @endif --}}

				<div class="input-group-append">
					<span class="input-group-text">
						<i class="far fa-calendar-alt"></i>
					</span>
				</div>

				<span class="text-danger">{{ $errors->first('shipped_at') }}</span>

			</div>

			<span><small class="form-text">Ensure you select Shipped from the Status dropdown</small></span>

		</div>

	</div>

{{-- @endif --}}
