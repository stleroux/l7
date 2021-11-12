<!-- CREATED DATE -->

<div class="col-sm-3">

	<div class="form-group {{ $errors->has('created_at') ? 'has-error' : '' }}">

		<label for="created_at">Created Date</label>

		<div class="input-group">

			<input
				type="text"
				name="created_at"
				value="{{ $invoice->created_at }}"
				class="form-control"
				{{ $readOnly ? 'readonly' : '' }} />
			{{-- @if($invoice->created_at || $invoice->status == 'paid')
			@else
				<input type="text" name="created_at" id="datePickerLogged" value="{{ $invoice->created_at }}" class="form-control" autocomplete="off" />
			@endif --}}

			<div class="input-group-append">
				<span class="input-group-text">
					<i class="far fa-calendar-alt"></i>
				</span>
			</div>

			<span class="text-danger">{{ $errors->first('created_at') }}</span>

		</div>

		{{-- <span><small class="form-text">Ensure you select Logged from the Status dropdown</small></span> --}}

	</div>

</div>
