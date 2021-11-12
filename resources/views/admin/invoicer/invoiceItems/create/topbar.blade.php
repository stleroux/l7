<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
      	
      	{{-- <a href="{{ route(Session::get('previous-route'), $invoice) }}" class="btn btn-sm btn-warning">
				<i class="{{ config('icons.back') }}"></i>
				Cancel
			</a> --}}

{{-- @if($invoice->status == "estimate") --}}
<a href="{{ route('admin.invoicer.invoices.edit', $invoice) }}" class="btn btn-sm btn-warning">
<i class="{{ config('icons.back') }}"></i>
Cancel
</a>	
{{-- @endif --}}
{{-- @if($invoice->status == "quote")
<a href="{{ route('admin.invoicer.quotes.edit', $invoice) }}" class="btn btn-sm btn-warning">
<i class="{{ config('icons.back') }}"></i>
Cancel
</a>
@elseif($invoice->status == "estimate")
<a href="{{ route('admin.invoicer.estimates.edit', $invoice) }}" class="btn btn-sm btn-warning">
<i class="{{ config('icons.back') }}"></i>
Cancel
</a>
@elseif($invoice->status == "invoiced")
<a href="{{ route('admin.invoicer.invoices.edit', $invoice) }}" class="btn btn-sm btn-warning">
<i class="{{ config('icons.back') }}"></i>
Cancel
</a>
@endif --}}

			{{-- <a href="{{ route('admin.invoicer.invoices.edit', $invoice->id) }}" class="btn btn-sm btn-warning">
				<i class="{{ config('icons.cancel') }}"></i>
				Cancel
			</a> --}}

			<button type="submit" name="submit" class="btn btn-sm btn-primary">
				<i class="{{ config('icons.invoicer-newBillable') }}"></i>
				Add Billable
			</button>

		</div>

	</div>

</div>
