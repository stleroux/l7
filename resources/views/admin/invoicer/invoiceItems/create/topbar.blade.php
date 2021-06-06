<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
			<a href="{{ route('admin.invoicer.invoices.edit', $invoice->id) }}" class="btn btn-sm btn-warning">
				<i class="{{ config('icons.cancel') }}"></i>
				Cancel
			</a>
			<button type="submit" name="submit" class="btn btn-sm btn-primary">
				<i class="{{ config('icons.invoicer-newBillable') }}"></i>
				Add Billable
			</button>
		</div>

	</div>

</div>
