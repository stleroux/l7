<!-- COMPLETED DATE -->

{{-- @if($invoice->status == 'completed') --}}

	<div class="col-sm-3">

		<div class="form-group {{ $errors->has('completed_at') ? 'has-error' : '' }}">

			<label for="completed_at">Completed Date</label>

			<div class="input-group">

				{{-- @if($invoice->completed_at)
					<input type="text" name="completed_at" value="{{ $invoice->completed_at }}" class="form-control" readonly />
				@else --}}
					<input
						type="text"
						name="completed_at"
						id="datePickerCompleted"
						value="{{ $invoice->completed_at }}"
						class="form-control"
						autocomplete="off"
						{{ $readOnly ? 'readonly disabled' : '' }} />
				{{-- @endif --}}

				<div class="input-group-append">
					<span class="input-group-text">
						<i class="far fa-calendar-alt"></i>
					</span>
				</div>

				<span class="text-danger">{{ $errors->first('completed_at') }}</span>

			</div>

			<span><small class="form-text">Ensure you select Completed from the Status dropdown</small></span>

		</div>

	</div>

{{-- @endif --}}
