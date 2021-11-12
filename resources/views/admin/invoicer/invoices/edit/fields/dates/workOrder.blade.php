<!--WORK ORDER DATE -->


{{-- @if($invoice->status == 'workOrder') --}}

	<div class="col-sm-3">

		<div class="form-group {{ $errors->has('workOrder_at') ? 'has-error' : '' }}">

			<label for="paid_at">Work Order Date</label>

			<div class="input-group">

				{{-- @if($invoice->workOrder_at)
					<input type="text" name="workOrder_at" value="{{ $invoice->workOrder_at }}" class="form-control" readonly />
				@else --}}
					<input
						type="text"
						name="workOrder_at"
						id="datePickerWorkOrder"
						value="{{ $invoice->workOrder_at }}"
						class="form-control"
						autocomplete="off"
						{{ $readOnly ? 'readonly disabled' : '' }} />
				{{-- @endif --}}

				<div class="input-group-append">
					<span class="input-group-text">
						<i class="far fa-calendar-alt"></i>
					</span>
				</div>

				<span class="text-danger">{{ $errors->first('workOrder_at') }}</span>

			</div>

			<span><small class="form-text">Ensure you select Work Order from the Status dropdown</small></span>

		</div>

	</div>

{{-- @endif --}}
