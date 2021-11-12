<!-- NOTES -->

<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">

	<label for="notes">Notes</label>

	<textarea name="notes" rows="4" class="form-control" {{ ($invoice->status == 'paid' ? 'readonly disabled' : '') }}>{{ $invoice->notes = str_replace('<br />', "\n", $invoice->notes) }}</textarea>

	<span class="text-danger">{{ $errors->first('notes') }}</span>

	<small id="passwordHelpBlock" class="form-text text-muted">
		These notes will not be shown on invoice
	</small>

</div>