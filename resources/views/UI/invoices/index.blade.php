@extends('layouts.UI.app-10')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.') }}"></i>
   My Invoices and Estimates
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Invoices and Estimates</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.blocks.popularItems') --}}
@endsection

@section('content')

   {{-- @include('admin.invoicer.invoices.index.topbar') --}}

   <div class="card">

      @if($invoices->count() > 0)
         <table id="" class="table table-hover table-stripped table-sm">
            <thead>
               <tr>
                  <th>Invoice #</th>
                  <th>Status</th>
                  <th>Created</th>
                  <th>Invoiced</th>
                  <th>Paid</th>
                  <th class="text-right">Charged</th>
                  <th class="text-right">Deposits</th>
                  <th class="text-right">Discounts</th>
                  <th class="text-right">Payments</th>
                  <th class="text-right">Owed</th>
                  <th></th>
               </tr>
            </thead>

            <tbody>
               @foreach($invoices as $invoice)
               <tr>
                  <td>{{ $invoice->id }}</td>
                  <td>
                     @if($invoice->status === 'estimate')
                        <span class="badge badge-secondary" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
                     @elseif($invoice->status === 'logged')
                        <span class="badge badge-info" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
                     @elseif($invoice->status === 'invoiced')
                        <span class="badge badge-warning" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
                     @else($invoice->status === 'paid')
                        <span class="badge badge-success" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
                     @endif
                  </td>
                  <td>{{ $invoice->created_at }}</td>
                  <td>{{ $invoice->invoiced_at }}</td>
                  <td>{{ $invoice->paid_at }}</td>
                  <td class="text-right">{{ number_format($invoice->sub_total, 2, '.', ', ') }}$</td>
                  <td class="text-right">{{ number_format($invoice->deposits, 2, '.', ', ') }}$</td>
                  <td class="text-right">{{ number_format($invoice->discounts, 2, '.', ', ') }}$</td>
                  <td class="text-right">{{ number_format($invoice->payments, 2, '.', ', ') }}$</td>
                  <td class="text-right">{{ number_format($invoice->total, 2, '.', ', ') }}$</td>
                  <td class="text-right">
                     <a href="{{ route('viewInvoice', $invoice) }}" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="View Invoice">
                        <i class="{{ config('icons.view') }}"></i>
                        View
                     </a>
                     <a href="{{ route('downloadPDFInvoice', $invoice) }}" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="Generate PDF">
                        <i class="{{ config('icons.view') }}"></i>
                        Generate PDF
                     </a>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      @else
         <div class="card-body">
            @if(Request::is('admin/invoicer/invoices/estimates'))
               No estimates found in the system.
            @else
               No invoices found in the system.
            @endif
         </div>
      @endif

      @if($invoices->count() > 0)
         <div class="card-footer">
            <div class="row">
               <div class="col-sm-6 text-left">
                  Showing records {{ $invoices->firstItem() }} to {{ $invoices->lastItem() }} of {{ $invoices->total() }}
               </div>
               <div class="col-sm-6 text-right">
                  {!! $invoices->appends(request()->except('page'))->render() !!}
               </div>
            </div>
         </div>
      @endif
   </div>





{{--    @empty
      {{ config('settings.noRecordsFound') }}
   @endforelse --}}

@endsection