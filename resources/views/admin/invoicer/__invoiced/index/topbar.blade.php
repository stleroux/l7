<div class="row pb-2">

   <div class="col">
      <span class="float-right">
         
         <a href="{{ route('admin.invoicer.invoiced.create') }}" class="btn btn-sm btn-primary">
            <i class="{{ config('icons.invoicer-invoices') }}"></i>
            New Invoice
         </a>







         
         @if(Request::is('admin/invoicer/invoices') || Request::is('admin/invoicer/invoices/logged') || Request::is('admin/invoicer/invoices/invoiced') || Request::is('admin/invoicer/invoices/paid') || Request::is('admin/invoicer/invoices/unpaid'))
            @if(Request::is('admin/invoicer/invoices/logged'))
               <a href="{{ route('admin.invoicer.invoices.status_invoiced_all') }}" class="btn btn-sm btn-outline-secondary">
                  <i class="far fa-file-alt"></i>
                  Mark All as Invoiced
               </a>
            @endif
            @if(Request::is('admin/invoicer/invoices/invoiced'))
               <a href="{{ route('admin.invoicer.invoices.status_paid_all') }}" class="btn btn-sm btn-outline-secondary">
                  <i class="far fa-money-bill-alt"></i>
                  Mark All as Paid
               </a>
            @endif
         @endif

         @if(Request::is('admin/invoicer/invoices/estimates'))
            <a href="{{ route('admin.invoicer.invoices.status_logged_all') }}" class="btn btn-sm btn-outline-secondary">
               <i class="far fa-file-alt"></i>
               Mark All as Logged
            </a>

            <a href="{{ route('admin.invoicer.invoices.create', ['type'=>'estimate']) }}" class="btn btn-sm btn-primary">
               <i class="{{ config('icons.invoicer-estimates') }}"></i>
               New Estimate
            </a>
         @endif

      </span>
   </div>

</div>