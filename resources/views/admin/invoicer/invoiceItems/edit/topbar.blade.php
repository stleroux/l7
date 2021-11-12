<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
			
			{{-- <a href="{{ route('admin.invoicer.invoices.edit', $item->invoice->id) }}" class="btn btn-sm btn-warning">
				<i class="{{ config('icons.cancel') }}"></i>
				Cancel
			</a> --}}

{{-- @if($item->invoice->status == "quote")
<a href="{{ route('admin.invoicer.quotes.edit', $item->invoice->id) }}" class="btn btn-sm btn-warning">
<i class="{{ config('icons.back') }}"></i>
Cancel
</a>
@elseif($item->invoice->status == "estimate")
<a href="{{ route('admin.invoicer.estimates.edit', $item->invoice->id) }}" class="btn btn-sm btn-warning">
<i class="{{ config('icons.back') }}"></i>
Cancel
</a>
@elseif($item->invoice->status == "invoiced")
<a href="{{ route('admin.invoicer.invoices.edit', $item->invoice->id) }}" class="btn btn-sm btn-warning">
<i class="{{ config('icons.back') }}"></i>
Cancel
</a>
@endif --}}
<a href="{{ route('admin.invoicer.invoices.edit', $item->invoice->id) }}" class="btn btn-sm btn-warning">
<i class="{{ config('icons.back') }}"></i>
Cancel
</a>

			<button type="submit" name="save" class="btn btn-sm btn-primary">
				<i class="{{ config('icons.save') }}"></i>
				Update Billable
			</button>

		</div>

	</div>

</div>
