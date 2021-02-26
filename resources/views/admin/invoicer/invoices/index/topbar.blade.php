<div class="row">

   <div class="col-xl-8">
      <ul class="nav nav-tabs justify-content-start">
         <li class="nav-item">
            <a class="nav-link {{ (Request::is('admin/invoicer/invoices') ? 'active' : '') }}" href="{{ route('admin.invoicer.invoices') }}">
               <i class="fas fa-list"></i>
               All
               <span class="badge badge-info">{{ App\Models\InvoicerInvoice::all()->count() }}</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link {{ (Request::is('admin/invoicer/invoices/estimates') ? 'active' : '') }}" href="{{ route('admin.invoicer.invoices.estimates') }}">
               <i class="fas fa-sign-out-alt"></i>
               Estimates
               <span class="badge badge-info text-right">{{ App\Models\InvoicerInvoice::where('status', 'estimate')->count() }}</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link {{ (Request::is('admin/invoicer/invoices/logged') ? 'active' : '') }}" href="{{ route('admin.invoicer.invoices.logged') }}">
               <i class="fas fa-sign-out-alt"></i>
               Logged
               <span class="badge badge-info text-right">{{ App\Models\InvoicerInvoice::where('status', 'logged')->count() }}</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link {{ (Request::is('admin/invoicer/invoices/invoiced') ? 'active' : '') }}" href="{{ route('admin.invoicer.invoices.invoiced') }}">
               <i class="far fa-file-alt"></i>
               Invoiced
               <span class="badge badge-info text-right">{{ App\Models\InvoicerInvoice::where('status', 'invoiced')->count() }}</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link {{ (Request::is('admin/invoicer/invoices/paid') ? 'active' : '') }}" href="{{ route('admin.invoicer.invoices.paid') }}">
               <i class="far fa-money-bill-alt"></i>
               Paid
               <span class="badge badge-info text-right">{{ App\Models\InvoicerInvoice::where('status', 'paid')->count() }}</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link {{ (Request::is('admin/invoicer/invoices/unpaid') ? 'active' : '') }}" href="{{ route('admin.invoicer.invoices.unpaid') }}">
               <i class="fas fa-ban"></i>
               Un-Paid
               <span class="badge badge-info text-right">{{ App\Models\InvoicerInvoice::where('status', '!=', 'paid')->count() }}</span>
            </a>
         </li>
      </ul>
   </div>

   <div class="col-xl-4">
      <span class="float-right">
         {{-- @if(checkPerm('invoicer_invoice_edit')) --}}
            @if(Request::is('admin/invoicer/invoices/logged'))
               <a href="{{ route('admin.invoicer.invoices.status_invoiced_all') }}" class="btn btn-sm btn-outline-primary">
                  <i class="far fa-file-alt"></i>
                  Mark All as Invoiced
               </a>
            @endif
            @if(Request::is('admin/invoicer/invoices/invoiced'))
               <a href="{{ route('admin.invoicer.invoices.status_paid_all') }}" class="btn btn-sm btn-outline-primary">
                  <i class="far fa-money-bill-alt"></i>
                  Mark All as Paid
               </a>
            @endif
         {{-- @endif --}}

         {{-- @if(checkPerm('invoicer_invoice_create')) --}}
            <a href="{{ route('admin.invoicer.invoices.create', ['type'=>'estimate']) }}" class="btn btn-sm btn-outline-secondary">
               {{-- <i class="far fa-plus-square"></i> --}}
               {{-- <i class="fas fa-calculator"></i> --}}
               <i class="{{ config('icons.invoicer-estimates') }}"></i>
               New Estimate
            </a>
            <a href="{{ route('admin.invoicer.invoices.create') }}" class="btn btn-sm btn-secondary">
               {{-- <i class="far fa-plus-square"></i> --}}
               {{-- <i class="fas fa-file-invoice-dollar"></i> --}}
               <i class="{{ config('icons.invoicer-invoices') }}"></i>
               New Invoice
            </a>
         {{-- @endif --}}
      </span>
   </div>

</div>