@canany(['invoicer-dashboard','invoicer-ledger','invoicer-invoice','invoicer-client','invoicer-product'])
   
   <li class="nav-item has-treeview {{ (Request::is('admin/invoicer*')) ? 'menu-open' : '' }}">
      
      <a href="#" class="nav-link {{ (Request::is('admin/invoicer*')) ? 'active' : '' }}">
         <i class="{{ config('icons.invoicer') }}"></i>
         <p>
            Invoicer
            <i class="right fas fa-angle-left"></i>
         </p>
      </a>

      <ul class="nav nav-treeview">
      
         @can('invoicer-dashboard')
            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer') }}" class="nav-link {{ Request::is('admin/invoicer') ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-dashboard') }}"></i>
                  <p>Dashboard</p>
               </a>
            </li>
         @endcan

         @can('invoicer-ledger')
            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.ledger') }}" class="nav-link {{ Request::is('admin/invoicer/ledger*') ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-ledger') }}"></i>
                  <p>Ledger</p>
               </a>
            </li>
         @endcan

         @can('invoicer-invoice')
            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.invoices', 'quotes') }}"
                  class="nav-link {{ Request::is('admin/invoicer/invoices/quotes*') ? 'active' : '' }}
                                  {{ (Request()->has('type') && request()->type == "quote") ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-quotes') }}"></i>
                  <p>Quotes</p>
                  <div class="float-right badge badge-light">{{ $quotesCount }}</div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.invoices', 'estimates') }}"
                  class="nav-link {{ Request::is('admin/invoicer/invoices/estimate*') ? 'active' : '' }}
                                  {{ Request::is('admin/invoicer/invoices/create') ? 'active' : '' }}
                                  {{ (request()->has('type') && request()->type == "estimate") ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-estimates') }}"></i>
                  <p>Estimates</p>
                  <div class="float-right badge badge-light">{{ $estimatesCount }}</div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.invoices', 'invoiced') }}"
                  class="nav-link {{ Request::is('admin/invoicer/invoices/invoiced*') ? 'active' : '' }}
                                  {{ (request()->has('type') && request()->type == "invoiced") ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-invoiced') }}"></i>
                  <p>Invoiced</p>
                  <div class="float-right badge badge-light">{{ $invoicedCount }}</div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.invoices', 'paid') }}"
                  class="nav-link {{ Request::is('admin/invoicer/invoices/paid*') ? 'active' : '' }}
                                  {{ (request()->has('type') && request()->type == "paid") ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-paid') }}"></i>
                  <p>Paid</p>
                  <div class="float-right badge badge-light">{{ $paidCount }}</div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.invoices', 'workOrders') }}"
                  class="nav-link {{ Request::is('admin/invoicer/invoices/workOrders*') ? 'active' : '' }}
                                  {{ (request()->has('type') && request()->type == "workOrder") ? 'active' : '' }}
                                  {{ (request()->has('type') && request()->type == "workOrders") ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-workOrders') }}"></i>
                  <p>Work Orders</p>
                  <div class="float-right badge badge-light">{{ $workOrdersCount }}</div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.invoices', 'completed') }}"
                  class="nav-link {{ Request::is('admin/invoicer/invoices/completed*') ? 'active' : '' }}
                                  {{ (request()->has('type') && request()->type == "completed") ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-completed') }}"></i>
                  <p>Completed</p>
                  <div class="float-right badge badge-light">{{ $completedCount }}</div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.invoices', 'shipped') }}"
                  class="nav-link {{ Request::is('admin/invoicer/invoices/shipped*') ? 'active' : '' }}
                                  {{ (request()->has('type') && request()->type == "shipped") ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-shipped') }}"></i>
                  <p>Shipped</p>
                  <div class="float-right badge badge-light">{{ $shippedCount }}</div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.invoices', 'pickedUp') }}"
                  class="nav-link {{ Request::is('admin/invoicer/invoices/pickedUp*') ? 'active' : '' }}
                                  {{ (request()->has('type') && request()->type == "pickedUp") ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-pickedUp') }}"></i>
                  <p>Picked Up</p>
                  <div class="float-right badge badge-light">{{ $pickedUpCount }}</div>
               </a>
            </li>

            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.invoices', 'canceled') }}"
                  class="nav-link {{ Request::is('admin/invoicer/invoices/canceled*') ? 'active' : '' }}
                                  {{ (request()->has('type') && request()->type == "canceled") ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-canceled') }}"></i>
                  <p>Canceled</p>
                  <div class="float-right badge badge-light">{{ $canceledCount }}</div>
               </a>
            </li>
            
            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.invoices') }}"
                  class="nav-link {{ Request::is('admin/invoicer/invoices') ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-all') }}"></i>
                  <p>All</p>
                  <div class="float-right badge badge-light">{{ $invoicesCount }}</div>
               </a>
            </li>

         @endcan

         @can('invoicer-product')
            <li class="nav-item ml-1">
               <a href="{{ route('admin.invoicer.products') }}" class="nav-link {{ Request::is('admin/invoicer/products*') ? 'active' : '' }}">
                  <i class="{{ config('icons.invoicer-products') }}"></i>
                  <p>Products</p>
               </a>
            </li>
         @endcan

      </ul>
   
   </li>

@endcan
