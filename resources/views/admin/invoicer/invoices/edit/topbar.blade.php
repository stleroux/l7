<div class="row mb-2">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
         
         @if($invoice->status != 'paid' && $invoice->invoiceItems->count() > 0)
            <a href="{{ route('admin.invoicer.activities.create', $invoice) }}" class="btn btn-sm btn-outline-primary">
               <i class="far fa-plus-square"></i>
               New Activity
            </a>
         @endif

         @if($invoice->status == 'logged' && $invoice->invoiceItems->count() > 0)
            <a href="{{ route('admin.invoicer.invoices.status_invoiced', $invoice->id) }}" class="btn btn-sm btn-outline-primary" title="Invoice">
               <i class="far fa-fw fa-file-alt"></i>
               Invoice
            </a>
         @endif

	      <a href="{{ route('admin.invoicer.invoices') }}" class="btn btn-sm btn-outline-secondary">
            <i class="fa fa-backward"></i>
            Cancel
         </a>

         @if($invoice->status != 'paid')
            <button type="submit" class="btn btn-sm btn-primary">
               <i class="{{ config('icons.save') }}"></i>
               Update Invoice
            </button>
         @endif
      </div>

   </div>

</div>