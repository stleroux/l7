<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
	      <a href="{{ route('admin.invoicer.invoices.edit', $invoice) }}" class="btn btn-sm btn-outline-secondary">
				<i class="{{ config('icons.back') }}"></i>
				Cancel
			</a>
         <button type="submit" name="submit" class="btn btn-sm btn-primary">
            <i class="{{ config('icons.add') }}"></i>
            Register Activity
         </button>
      </div>

   </div>

</div>
