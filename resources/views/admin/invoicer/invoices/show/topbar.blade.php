<div class="row mb-2 no-print">

   <div class="col">
   </div>

   <div class="col">


{{-- @if(request()->has('type') && (request()->type == "quote")) --}}
@if($invoice->status == "quote")
<a href="{{ route('admin.invoicer.invoices', 'quotes') }}" class="btn btn-sm btn-warning">
<i class="{{ config('icons.cancel') }}"></i>
Cancel
</a>
@endif

{{-- @if(request()->has('type') && (request()->type == "estimate")) --}}
@if($invoice->status == "estimate")
<a href="{{ route('admin.invoicer.invoices', 'estimates') }}" class="btn btn-sm btn-warning">
<i class="{{ config('icons.cancel') }}"></i>
Cancel
</a>
@endif


      <div class="float-right">
	     @if($invoice->status != 'paid')
            <a href="{{ route('admin.invoicer.invoices.edit', $invoice->id) }}" class="btn btn-sm btn-outline-secondary d-print-none">
               <i class="fa fa-edit"></i>
               @if($invoice->status == "estimate")
                  Edit Estimate
               @else
                  Edit Invoice
               @endif
            </a>
         @endif

         <a href="{{ route('admin.invoicer.invoices.PDF', $invoice->id) }}" class="btn btn-sm btn-outline-secondary d-print-none">
            <i class="fa fa-list"></i>
            Generate PDF
         </a>

         <a href="#" onClick="javascript:window.print()" class="btn btn-sm btn-outline-secondary d-print-none">
            <i class="fa fa-print"></i>
            Print this page
         </a>

{{--          @if($invoice->status == "estimate")
            <a href="{{ route('admin.invoicer.invoices.estimates') }}" class="btn btn-sm btn-primary d-print-none">
               <i class="fa fa-list"></i>
               Estimates List
            </a>
         @else
            <a href="{{ route('admin.invoicer.invoices') }}" class="btn btn-sm btn-primary d-print-none">
               <i class="fa fa-list"></i>
               Invoices List
            </a>
         @endif --}}
      </div>

   </div>

</div>