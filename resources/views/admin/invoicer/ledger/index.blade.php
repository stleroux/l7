@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.invoicer-ledger') }}"></i>
	<span class="h3">Invoicer :: Ledger
		{{ (Request::is('admin/invoicer/ledger/logged') ? '- Logged':'') }}
		{{ (Request::is('admin/invoicer/ledger/invoiced') ? '- Invoiced':'') }}
		{{ (Request::is('admin/invoicer/ledger/paid') ? '- Paid':'') }}
		{{ (Request::is('admin/invoicer/ledger/unpaid') ? '- Unpaid':'') }}
	</span>
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Ledger</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	@include('admin.invoicer.ledger.topbar')

	<div class="card">
{{-- 		<div class="card-header">
			<span class="h3">Ledger
				{{ (Request::is('admin/invoicer/ledger/logged') ? '- Logged':'') }}
				{{ (Request::is('admin/invoicer/ledger/invoiced') ? '- Invoiced':'') }}
				{{ (Request::is('admin/invoicer/ledger/paid') ? '- Paid':'') }}
				{{ (Request::is('admin/invoicer/ledger/unpaid') ? '- Unpaid':'') }}
			</span>
		</div> --}}
		{{-- <div class="card-body"> --}}
			@if($invoices->count() > 0)
				<table class="table table-hover table-stripped table-sm">
					<thead>
						<tr>
							<th>@sortablelink('id','Inv #')</th>
							@if(Request::is('admin/invoicer/ledger/logged'))
								<th>@sortablelink('created_at','Logged Date')</th>
							@endif
							@if(Request::is('admin/invoicer/ledger/invoiced'))
								<th>@sortablelink('invoiced_at','Invoiced Date')</th>
							@endif
							@if(Request::is('admin/invoicer/ledger/paid'))
								<th>@sortablelink('paid_at','Paid Date')</th>
							@endif
							@if(Request::is('admin/invoicer/ledger'))
								<th>@sortablelink('status','Status')</th>
							@endif
							<th>@sortablelink('user.company_name','Company Name')</th>
							<th class="text-right">@sortablelink('amount_charged','Charge')</th>
							<th class="d-none d-md-table-cell text-right">@sortablelink('hst','HST')</th>
							<th class="d-none d-lg-table-cell text-right" title="SubTotal">@sortablelink('sub_total','SUB')</th>
							<th class="d-none d-lg-table-cell text-right">@sortablelink('wsib','WSIB')</th>
							<th class="d-none d-lg-table-cell text-right" title="Income Taxes">@sortablelink('income_taxes','IT')</th>
							<th class="d-none d-sm-table-cell text-right" title="Total Deductions">@sortablelink('total_deductions','DED')</th>
							<th class="text-right">@sortablelink('total','NET')</th>
						</tr>
					</thead>
					<tfoot>
						<tr class="bg-info">
							<td colspan="{{ (Request::is('admin/invoicer/ledger/unpaid') ? '2' : '3') }}" class="text-right"><b>Totals This Page :&nbsp;</b></td>
							<td class="text-right">{{ number_format($invoices->sum('amount_charged'), 2, '.', ', ') }}$</td>
							<td class="d-none d-md-table-cell text-right">{{ number_format($invoices->sum('hst'), 2, '.', ', ') }}$</td>
							<td class="d-none d-lg-table-cell text-right">{{ number_format($invoices->sum('sub_total'), 2, '.', ', ') }}$</td>
							<td class="d-none d-lg-table-cell text-right">{{ number_format($invoices->sum('wsib'), 2, '.', ', ') }}$</td>
							<td class="d-none d-lg-table-cell text-right">{{ number_format($invoices->sum('income_taxes'), 2, '.', ', ') }}$</td>
							<td class="d-none d-sm-table-cell text-right">{{ number_format($invoices->sum('total_deductions'), 2, '.', ', ') }}$</td>
							<td class="text-right">{{ number_format($invoices->sum('total'), 2, '.', ', ') }}$</td>
						</tr>
						<tr class="bg-info">
							<td colspan="{{ (Request::is('admin/invoicer/ledger/unpaid') ? '2' : '3') }}" class="text-right"><b>Overall Totals :&nbsp;</b></td>
							<td class="text-right">{{ number_format($totalAmountCharged, 2, '.', ', ') }}$</td>
							<td class="d-none d-md-table-cell text-right">{{ number_format($totalHST, 2, '.', ', ') }}$</td>
							<td class="d-none d-lg-table-cell text-right">{{ number_format($totalSubTotal, 2, '.', ', ') }}$</td>
							<td class="d-none d-lg-table-cell text-right">{{ number_format($totalWSIB, 2, '.', ', ') }}$</td>
							<td class="d-none d-lg-table-cell text-right">{{ number_format($totalIncomeTaxes, 2, '.', ', ') }}$</td>
							<td class="d-none d-sm-table-cell text-right">{{ number_format($totalTotalDeductions, 2, '.', ', ') }}$</td>
							<td class="text-right">{{ number_format($totalTotal, 2, '.', ', ') }}$</td>
						</tr>
					</tfoot>
					<tbody>
						@foreach($invoices as $invoice)
						<tr>
							<td>
								{{-- <a href="{{ route('admin.invoicer.invoices.show', $invoice->id) }}"> --}}{{ $invoice->id }}
							</td>
							
							@if(Request::is('admin/invoicer/ledger/logged'))
								<td>{{ $invoice->created_at }}</td>
							@endif
							@if(Request::is('admin/invoicer/ledger/invoiced'))
								<td>{{ $invoice->invoiced_at }}</td>
							@endif
							@if(Request::is('admin/invoicer/ledger/paid'))
								<td>{{ $invoice->paid_at }}</td>
							@endif
							@if(Request::is('admin/invoicer/ledger'))
								<td>
									@if($invoice->status === 'logged')
										<span class="badge badge-info" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
									@elseif($invoice->status === 'invoiced')
										<span class="badge badge-warning" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
									@else($invoice->status === 'paid')
										<span class="badge badge-success" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
									@endif
								</td>
							@endif
							<td>
								@can('invoicer-client')
									<a href="{{ route('admin.invoicer.clients.show', $invoice->user_id) }}">{{ $invoice->user->company_name }}</a>
								@else
									{{ $invoice->user->company_name }}
								@endcan
							</td>
							<td class="text-right">{{ number_format($invoice->amount_charged, 2, '.' , ', ') }}$</td>
							<td class="d-none d-md-table-cell text-right">{{ number_format($invoice->hst, 2, '.' , ', ') }}$</td>
							<td class="d-none d-lg-table-cell text-right">{{ number_format($invoice->sub_total, 2, '.', ', ') }}$</td>
							<td class="d-none d-lg-table-cell text-right">{{ number_format($invoice->wsib, 2, '.' , ', ') }}$</td>
							<td class="d-none d-lg-table-cell text-right">{{ number_format($invoice->income_taxes, 2, '.' , ', ') }}$</td>
							<td class="d-none d-sm-table-cell text-right">{{ number_format($invoice->total_deductions, 2, '.' , ', ') }}$</td>
							<td class="text-right">{{ number_format($invoice->total, 2, '.' , ', ') }}$</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<div class="card-body">
					No records found in the system.
				</div>
			@endif
		{{-- </div> --}}

		@if($invoices->count() > 0)
			<div class="card-footer p-2">
				<div class="row d-flex">
					<div class="col">
						Showing records {{ $invoices->firstItem() }} to {{ $invoices->lastItem() }} of {{ $invoices->total() }}
					</div>
					<div class="col d-flex justify-content-end">
						{!! $invoices->appends(request()->except('page'))->render() !!}
					</div>
				</div>
			</div>
		@endif
	</div>

@endsection
