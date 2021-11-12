{{ (Request::is('admin/invoicer/invoices/quotes') ? ' Quotes':'') }}
{{ (Request::is('admin/invoicer/invoices/estimates') ? ' Estimates':'') }}
{{ (Request::is('admin/invoicer/invoices/invoiced') ? ' Invoiced':'') }}
{{ (Request::is('admin/invoicer/invoices/paid') ? ' Paid':'') }}
{{ (Request::is('admin/invoicer/invoices/workOrders') ? ' Work Orders':'') }}
{{ (Request::is('admin/invoicer/invoices/completed') ? ' Completed':'') }}
{{ (Request::is('admin/invoicer/invoices/shipped') ? ' Shipped':'') }}
{{ (Request::is('admin/invoicer/invoices/pickedUp') ? ' Picked Up':'') }}
{{ (Request::is('admin/invoicer/invoices/canceled') ? ' Canceled':'') }}
{{ (Request::is('admin/invoicer/invoices') ? ' Invoices':'') }}