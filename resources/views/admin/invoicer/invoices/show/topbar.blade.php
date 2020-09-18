<div class="row mb-2 no-print">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
	     @if($invoice->status != 'paid')
            {{-- @if(checkPerm('invoicer_invoice_edit')) --}}
               <a href="{{ route('admin.invoicer.invoices.edit', $invoice->id) }}" class="btn btn-sm btn-outline-secondary d-print-none">
                  <i class="fa fa-edit"></i>
                  Edit Invoice
               </a>
            @endif
         {{-- @endif --}}

{{--        <a href="{{ route('admin.invoicer.invoices.downloadPDFInvoice', $invoice->id) }}" class="btn btn-sm btn-outline-secondary d-print-none">
            <i class="fa fa-list"></i>
            Download as PDF
         </a> --}}

         <a href="{{ route('admin.invoicer.invoices.PDF', $invoice->id) }}" class="btn btn-sm btn-outline-secondary d-print-none">
            <i class="fa fa-list"></i>
            Generate PDF
         </a>

         <a href="#" onClick="javascript:window.print()" class="btn btn-sm btn-outline-secondary d-print-none">
            <i class="fa fa-print"></i>
            Print this page
         </a>

         <a href="{{ route('admin.invoicer.invoices') }}" class="btn btn-sm btn-primary d-print-none">
            <i class="fa fa-list"></i>
            Invoices List
         </a>
      </div>

   </div>

</div>