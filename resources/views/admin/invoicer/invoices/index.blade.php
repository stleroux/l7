@extends('layouts.admin.admin')

@section('stylesheet')
<link href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css" rel="stylesheet">
@endsection

@section('pageHeader')
   @include('admin.invoicer.invoices.index.headerIcons')
   <span class="h3">Invoicer ::
      @include('admin.invoicer.invoices.index.headerTypes')    
   </span>
@endsection

@section('breadcrumb')
   @include('admin.invoicer.invoices.index.breadcrumbs')
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

   @include('admin.invoicer.invoices.index.topbar')

   <div class="card">
      <div class="card-body m-0 p-2">
         @if($invoices->count() > 0)
            <table class="table table-hover table-stripped table-sm" id="datatable">
               <thead>
                  <tr>
                     <th>Invoice #</th>
                     @if(Request::is('admin/invoicer/invoices'))
                        <th>Status</th>
                     @endif
                     @if(Request::is('admin/invoicer/invoices/quotes') || Request::is('admin/invoicer/invoices/estimates'))
                        <th>Created</th>
                     @elseif(Request::is('admin/invoicer/invoices/invoiced'))
                        <th>Created</th>
                        <th>Invoiced</th>
                     @elseif(Request::is('admin/invoicer/invoices/paid'))
                        <th>Invoiced</th>
                        <th>Paid</th>
                     @elseif(Request::is('admin/invoicer/invoices/workOrders'))
                        <th>Paid</th>
                        <th>WorkOrdered</th>
                     @elseif(Request::is('admin/invoicer/invoices/completed'))
                        <th>WorkOrderes</th>
                        <th>Completed</th>
                     @elseif(Request::is('admin/invoicer/invoices/shipped'))
                        <th>Completed</th>
                        <th>Shipped</th>
                     @elseif(Request::is('admin/invoicer/invoices/pickedUp'))
                        <th>Completed</th>
                        <th>PickedUp</th>
                     @elseif(Request::is('admin/invoicer/invoices/canceled'))
                        <th>Canceled</th>
                     @endif
                     <th>Last Name</th>
                     <th>First Name</th>
                     <th>Company Name</th>
                     <th>Items</th>
                     <th>Charged</th>
                     <th class="text-right">Deposits</th>
                     <th class="text-right">Discounts</th>
                     <th class="text-right">Payments</th>
                     <th class="text-right">Owed</th>
                     <th class="no-sort"></th>
                  </tr>
               </thead>

               <tbody>
                  @foreach($invoices as $invoice)
                  <tr>

                     <td>{{ $invoice->id }}</td>
                     
                     @if(Request::is('admin/invoicer/invoices'))
                        <td>
                           @if($invoice->status == 'quote')
                              <i class="{{ config('icons.invoicer-quotes') }}" style="font-size: 20px" title="Quote" data-toggle="tooltip"></i>
                           @endif
                           @if($invoice->status == 'estimate')
                              <i class="{{ config('icons.invoicer-estimates') }}" style="font-size: 20px" title="Estimate" data-toggle="tooltip"></i>
                           @endif
                           @if($invoice->status == 'invoiced')
                              <i class="{{ config('icons.invoicer-invoiced') }}" style="font-size: 20px" title="Invoiced" data-toggle="tooltip"></i>
                           @endif
                           @if($invoice->status == 'paid')
                              <i class="{{ config('icons.invoicer-paid') }}" style="font-size: 20px" title="Paid" data-toggle="tooltip"></i>
                           @endif
                           @if($invoice->status == 'workOrder')
                              <i class="{{ config('icons.invoicer-workOrders') }}" style="font-size: 20px" title="Work Order" data-toggle="tooltip"></i>
                           @endif
                           @if($invoice->status == 'completed')
                              <i class="{{ config('icons.invoicer-completed') }}" style="font-size: 20px" title="Completed" data-toggle="tooltip"></i>
                           @endif
                           @if($invoice->status == 'shipped')
                              <i class="{{ config('icons.invoicer-shipped') }}" style="font-size: 20px" title="Shipped" data-toggle="tooltip"></i>
                           @endif
                           @if($invoice->status == 'pickedUp')
                              <i class="{{ config('icons.invoicer-pickedUp') }}" style="font-size: 20px" title="Picked Up" data-toggle="tooltip"></i>
                           @endif
                           @if($invoice->status == 'canceled')
                              <i class="{{ config('icons.invoicer-canceled') }}" style="font-size: 20px" title="Canceled" data-toggle="tooltip"></i>
                           @endif
                        </td>
                     @endif
                     
                     @if(Request::is('admin/invoicer/invoices/quotes') || Request::is('admin/invoicer/invoices/estimates'))
                        <td>{{ $invoice->created_at }}</td>
                     @elseif(Request::is('admin/invoicer/invoices/invoiced'))
                        <td>{{ $invoice->created_at }}</td>
                        <td>{{ $invoice->invoiced_at }}</td>
                     @elseif(Request::is('admin/invoicer/invoices/paid'))
                        <td>{{ $invoice->invoiced_at }}</td>
                        <td>{{ $invoice->paid_at }}</td>
                     @elseif(Request::is('admin/invoicer/invoices/workOrders'))
                        <td>{{ $invoice->paid_at }}</td>
                        <td>{{ $invoice->workOrder_at }}</td>
                     @elseif(Request::is('admin/invoicer/invoices/completed'))
                        <td>{{ $invoice->workOrder_at }}</td>
                        <td>{{ $invoice->completed_at }}</td>
                     @elseif(Request::is('admin/invoicer/invoices/shipped'))
                        <td>{{ $invoice->completed_at }}</td>
                        <td>{{ $invoice->shipped_at }}</td>
                     @elseif(Request::is('admin/invoicer/invoices/pickedUp'))
                        <td>{{ $invoice->completed_at }}</td>
                        <td>{{ $invoice->pickedUp_at }}</td>
                     @elseif(Request::is('admin/invoicer/invoices/canceled'))
                        <td>{{ $invoice->canceled_at }}</td>
                     @endif
                     
                     <td>
                        @can('invoicer-client')
                           <a href="{{ route('admin.users.show', $invoice->client->id) }}">{{ $invoice->client->last_name }}</a>
                        @else
                           {{ $invoice->client->last_name }}
                        @endcan
                     </td>

                     <td>
                        {{ $invoice->client->first_name }}                    
                     </td>

                     <td>
                        {{ $invoice->client->company_name }}
                     </td>
                     <td>
                        {{ $invoice->invoiceItems->count() }}
                     </td>

                     <td class="text-right">{{ number_format($invoice->sub_total, 2, '.', ', ') }}$</td>
                     <td class="text-right">{{ number_format($invoice->deposits, 2, '.', ', ') }}$</td>
                     <td class="text-right">{{ number_format($invoice->discounts, 2, '.', ', ') }}$</td>
                     <td class="text-right">{{ number_format($invoice->payments, 2, '.', ', ') }}$</td>
                     <td class="text-right">{{ number_format($invoice->total, 2, '.', ', ') }}$</td>
                     <td>
                        <div class="flex">

                           @if($invoice->status == 'quote')
                              <form action="{{ route('admin.invoicer.invoices.refreshData', $invoice) }}" method="POST" class="float-right d-block pl-1">
                                 @csrf
                                 @method('PUT')
                                 <button type="submit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" title="Refresh Amounts">
                                    <i class="{{ config('icons.refresh') }}"></i>
                                 </button>
                              </form>
                           @endif

                           <form action="{{ route('admin.invoicer.invoices.destroy',[$invoice->id]) }}" method="POST" 
                              onsubmit="return confirm('Do you really want to delete this invoice and related items?\n\nThis will PERMANENTLY DELETE the invoice and related items.');"
                              class="float-right d-block">
                              @csrf
                              <input type="hidden" name="_method" value="DELETE" />

                              @if($invoice->status == 'quote' || $invoice->status == 'estimate')
                                 <a href="{{ route('admin.invoicer.invoiceItems.create', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="New Billable">
                                    <i class="{{ config('icons.invoicer-newBillable') }}"></i>
                                 </a>
                              @endif

                              @if($invoice->invoiceItems->count() > 0)
                                 <a href="{{ route('admin.invoicer.activities.create', $invoice) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="New Activity">
                                    <i class="{{ config('icons.invoicer-newActivity') }}"></i>
                                 </a>
                              @endif

                              @if($invoice->status == "quote")
                                 <a href="{{ route('admin.invoicer.invoices.status_invoiced', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Invoiced">
                                    <i class="{{ config('icons.invoicer-invoiced') }}"></i>
                                 </a>
                              @endif
                              
                              @if($invoice->status == "estimate")
                                 <a href="{{ route('admin.invoicer.invoices.status_invoiced', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Invoiced">
                                    <i class="{{ config('icons.invoicer-invoiced') }}"></i>
                                 </a>
                              @endif

                              @if($invoice->status == "invoiced")
                                 <a href="{{ route('admin.invoicer.invoices.status_quoted', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Quote">
                                    <i class="{{ config('icons.invoicer-quotes') }}"></i>
                                 </a>
                                 <a href="{{ route('admin.invoicer.invoices.status_estimated', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Estimate">
                                    <i class="{{ config('icons.invoicer-estimates') }}"></i>
                                 </a>
                                 {{-- <a href="{{ route('admin.invoicer.invoices.status_paid', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Paid">
                                    <i class="{{ config('icons.invoicer-paid') }}"></i>
                                 </a> --}}
                              @endif
                              
                              @if($invoice->status == "paid")
                                 <a href="{{ route('admin.invoicer.invoices.status_workOrdered', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Work Order">
                                    <i class="fas fa-fw fa-angle-double-right"></i>
                                 </a>
                              @endif
                              
                              @if($invoice->status == "workOrder")
                                 <a href="{{ route('admin.invoicer.invoices.status_completed', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Completed">
                                    <i class="fas fa-fw fa-angle-double-right"></i>
                                 </a>
                              @endif
                              
                              @if($invoice->status == "completed")
                                 <a href="{{ route('admin.invoicer.invoices.status_shipped', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Shipped">
                                    <i class="{{ config('icons.invoicer-shipped') }}"></i>
                                 </a>
                              @endif

                              @if($invoice->status == "completed")
                                 <a href="{{ route('admin.invoicer.invoices.status_pickedUp', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Move to Picked Up">
                                    <i class="{{ config('icons.invoicer-pickedUp') }}"></i>
                                 </a>
                              @endif

                              <a href="{{ route('admin.invoicer.invoices.show', [$invoice->id, 'type'=>$invoice->status]) }}" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="View {{ Str::ucfirst($invoice->status) }}">
                                 <i class="{{ config('icons.view') }}"></i>
                              </a>

                              <a href="{{ route('admin.invoicer.invoices.edit', [$invoice->id, 'type'=>$invoice->status]) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit {{ Str::ucfirst($invoice->status) }}">
                                 <i class="{{ config('icons.edit') }}"></i>
                              </a>



                              <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete {{ Str::ucfirst($invoice->status) }}">
                                 <i class="{{ config('icons.trash') }}"></i>
                              </button>

                           </form>
                        </div>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         @else
            {{ config('settings.noRecordsFound') }}
         @endif
      </div>
   </div>

@endsection

@section('scripts')
@endsection
