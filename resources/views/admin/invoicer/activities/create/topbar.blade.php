<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">

@php
// $previousRoute = Session::get('previous-route');
// dd($previousRoute);
@endphp
<a href="{{ route('admin.invoicer.invoices.edit', [$invoice, 'type'=>$invoice->status]) }}" class="btn btn-sm btn-warning">
<i class="{{ config('icons.back') }}"></i>
Cancel
</a>
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
	      {{-- <a href="{{ route($previousRoute, $invoice) }}" class="btn btn-sm btn-warning"> --}}
         {{-- <a href="{{ route(Session::get('previous-route'), $invoice) }}" class="btn btn-sm btn-warning">
				<i class="{{ config('icons.back') }}"></i>
				Cancel
			</a> --}}



{{--          <a href="{{ route('admin.invoicer.invoices.edit', $invoice) }}" class="btn btn-sm btn-warning">
            <i class="{{ config('icons.back') }}"></i>
            Cancel
         </a> --}}

         <button type="submit" name="submit" class="btn btn-sm btn-primary">
            <i class="{{ config('icons.invoicer-newActivity') }}"></i>
            Register Activity
         </button>

      </div>

   </div>

</div>
