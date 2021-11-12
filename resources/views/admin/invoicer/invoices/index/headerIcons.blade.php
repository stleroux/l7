@if(Request::is('admin/invoicer/invoices/quotes'))
    <i class="{{ config('icons.invoicer-quotes') }}"></i>
@endif

@if(Request::is('admin/invoicer/invoices/estimates'))
    <i class="{{ config('icons.invoicer-estimates') }}"></i>
@endif

@if(Request::is('admin/invoicer/invoices/invoiced'))
    <i class="{{ config('icons.invoicer-invoiced') }}"></i>
@endif

@if(Request::is('admin/invoicer/invoices/paid'))
    <i class="{{ config('icons.invoicer-paid') }}"></i>
@endif

@if(Request::is('admin/invoicer/invoices/workOrders'))
    <i class="{{ config('icons.invoicer-workOrders') }}"></i>
@endif

@if(Request::is('admin/invoicer/invoices/completed'))
    <i class="{{ config('icons.invoicer-completed') }}"></i>
@endif

@if(Request::is('admin/invoicer/invoices/shipped'))
    <i class="{{ config('icons.invoicer-shipped') }}"></i>
@endif

@if(Request::is('admin/invoicer/invoices/pickedUp'))
    <i class="{{ config('icons.invoicer-pickedUp') }}"></i>
@endif

@if(Request::is('admin/invoicer/invoices/canceled'))
    <i class="{{ config('icons.invoicer-canceled') }}"></i>
@endif

@if(Request::is('admin/invoicer/invoices'))
    <i class="{{ config('icons.invoicer-all') }}"></i>
@endif
