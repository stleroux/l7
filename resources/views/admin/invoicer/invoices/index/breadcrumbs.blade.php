<li class="breadcrumb-item">
    <a href="{{ route('admin.invoicer') }}">
        Invoicer
    </a>
</li>

@if(Request::is('admin/invoicer/invoices/quotes'))
    <li class="breadcrumb-item">Quotes</li>
@endif

@if(Request::is('admin/invoicer/invoices/estimates'))
    <li class="breadcrumb-item">Estimates</li>
@endif

@if(Request::is('admin/invoicer/invoices/invoiced'))
    <li class="breadcrumb-item">Invoiced</li>
@endif

@if(Request::is('admin/invoicer/invoices/paid'))
    <li class="breadcrumb-item">Paid</li>
@endif

@if(Request::is('admin/invoicer/invoices/workOrders'))
    <li class="breadcrumb-item">Work Orders</li>
@endif

@if(Request::is('admin/invoicer/invoices/completed'))
    <li class="breadcrumb-item">Completed</li>
@endif

@if(Request::is('admin/invoicer/invoices/shipped'))
    <li class="breadcrumb-item">Shipped</li>
@endif

@if(Request::is('admin/invoicer/invoices/pickedUp'))
    <li class="breadcrumb-item">Picked Up</li>
@endif

@if(Request::is('admin/invoicer/invoices/canceled'))
    <li class="breadcrumb-item">Canceled</li>
@endif

@if(Request::is('admin/invoicer/invoices'))
    <li class="breadcrumb-item">Invoices</li>
@endif
