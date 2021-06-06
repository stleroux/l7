<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
			
			<a href="{{ route('admin.invoicer.invoices.edit', $item->invoice->id) }}" class="btn btn-sm btn-warning">
				<i class="{{ config('icons.cancel') }}"></i>
				Cancel
			</a>

			<button type="submit" name="save" class="btn btn-sm btn-primary">
				<i class="{{ config('icons.save') }}"></i>
				Update Billable
			</button>

		</div>

	</div>

</div>
