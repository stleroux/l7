<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
         
         @if($invoice->status == 'quote' || $invoice->status == "estimate")
            <a href="{{ route('admin.invoicer.invoiceItems.create', [$invoice, 'type'=>$invoice->status]) }}" class="btn btn-sm btn-secondary">
               <i class="{{ config('icons.invoicer-newBillable') }}"></i>
               Add Billable
            </a>
         @endif

         @if(($invoice->status == 'quote' || $invoice->status == 'estimate' || $invoice->status == 'invoiced') && ($invoice->invoiceItems->count() > 0))
            <a href="{{ route('admin.invoicer.activities.create', [$invoice, 'type'=>$invoice->status]) }}" class="btn btn-sm btn-secondary">
               <i class="{{ config('icons.invoicer-newActivity') }}"></i>
               Add Activity
            </a>
         @endif

         @if(request()->has('type') && (request()->type == "quote"))
            <a href="{{ route('admin.invoicer.invoices', 'quotes') }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
         @endif

         @if(request()->has('type') && (request()->type == "estimate"))
            <a href="{{ route('admin.invoicer.invoices', 'estimates') }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
         @endif

         @if(request()->has('type') && (request()->type == "invoiced"))
            <a href="{{ route('admin.invoicer.invoices', 'invoiced') }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
         @endif

         @if(request()->has('type') && (request()->type == "paid"))
            <a href="{{ route('admin.invoicer.invoices', 'paid') }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
         @endif

         @if(request()->has('type') && (request()->type == "workOrder"))
            <a href="{{ route('admin.invoicer.invoices', 'workOrders') }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
         @endif

         @if(request()->has('type') && (request()->type == "completed"))
            <a href="{{ route('admin.invoicer.invoices', 'completed') }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
         @endif

         @if(request()->has('type') && (request()->type == "shipped"))
            <a href="{{ route('admin.invoicer.invoices', 'shipped') }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
         @endif

         @if(request()->has('type') && (request()->type == "pickedUp"))
            <a href="{{ route('admin.invoicer.invoices', 'pickedUp') }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
         @endif

         @if(request()->has('type') && (request()->type == "canceled"))
            <a href="{{ route('admin.invoicer.invoices', 'canceled') }}" class="btn btn-sm btn-warning">
               <i class="{{ config('icons.cancel') }}"></i>
               Cancel
            </a>
         @endif

         <button type="submit" class="btn btn-sm btn-primary">
            <i class="{{ config('icons.save') }}"></i>
            Update {{ (Str::lower($invoice->status) == "estimate" ? "Estimate" : "Invoice") }}
         </button>

      </div>

   </div>

</div>
