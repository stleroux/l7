<div class="row mb-2 no-print">

   <div class="col">
   </div>

   <div class="col">

      <div class="float-right">
            
            <a href="{{ route('admin.invoicer.estimates.edit', $invoice->id) }}" class="btn btn-sm btn-outline-secondary d-print-none">
               <i class="fa fa-edit"></i>
               Edit Estimate
            </a>
            
            <a href="{{ route('admin.invoicer.estimates') }}" class="btn btn-sm btn-primary d-print-none">
               <i class="fa fa-list"></i>
               Estimates List
            </a>




	     {{-- @if($invoice->status != 'paid')
         @endif

         <a href="{{ route('admin.invoicer.invoices.PDF', $invoice->id) }}" class="btn btn-sm btn-outline-secondary d-print-none">
            <i class="fa fa-list"></i>
            Generate PDF
         </a>

         <a href="#" onClick="javascript:window.print()" class="btn btn-sm btn-outline-secondary d-print-none">
            <i class="fa fa-print"></i>
            Print this page
         </a>

         @if($invoice->status == "estimate")
         @else
            <a href="{{ route('admin.invoicer.invoices') }}" class="btn btn-sm btn-primary d-print-none">
               <i class="fa fa-list"></i>
               Invoices List
            </a>
         @endif --}}
      </div>

   </div>

</div>