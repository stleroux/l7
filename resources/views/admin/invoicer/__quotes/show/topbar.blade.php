<div class="row mb-2 no-print">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
	     @if($invoice->status != 'paid')
            <a href="{{ route('admin.invoicer.quotes.edit', $invoice->id) }}" class="btn btn-sm btn-outline-secondary d-print-none">
               <i class="fa fa-edit"></i>
               Edit Quote
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

         <a href="{{ route('admin.invoicer.quotes') }}" class="btn btn-sm btn-primary d-print-none">
            <i class="fa fa-list"></i>
            Quotes List
         </a>

      </div>

   </div>

</div>