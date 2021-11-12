<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
         
         <a href="{{ route('admin.invoicer.invoiceItems.create', $invoice) }}" class="btn btn-sm btn-outline-secondary">
            <i class="{{ config('icons.invoicer-newBillable') }}"></i>
            Add Billable
         </a>

         @if($invoice->status != 'paid' && $invoice->invoiceItems->count() > 0)
            <a href="{{ route('admin.invoicer.activities.create', $invoice) }}" class="btn btn-sm btn-outline-secondary">
               <i class="{{ config('icons.invoicer-newActivity') }}"></i>
               Add Activity
            </a>
         @endif

         <a href="{{ route('admin.invoicer.invoiced') }}" class="btn btn-sm btn-warning">
            <i class="{{ config('icons.cancel') }}"></i>
            Cancel
         </a>

         <button type="submit" class="btn btn-sm btn-primary">
            <i class="{{ config('icons.save') }}"></i>
            Update Invoice
         </button>





{{-- 
         @if($invoice->status == 'logged' && $invoice->invoiceItems->count() > 0)
            <a href="{{ route('admin.invoicer.invoices.status_invoiced', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" title="Invoice">
               <i class="{{ config('icons.invoicer-markAsInvoiced') }}"></i>
               Mark as Invoiced
            </a>
         @endif

         @if(Str::lower($invoice->status == "estimate"))
         @else
   	      <a href="{{ route('admin.invoicer.invoices') }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
         @endif

         @if($invoice->status != 'paid')
         @endif --}}
      </div>

   </div>

</div>