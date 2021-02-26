@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.invoicer-invoices') }}"></i>
	<span class="h3">Invoicer :: Invoices and Estimates
		{{ (Request::is('admin/invoicer/invoices/estimates') ? '- Estimates':'') }}
		{{ (Request::is('admin/invoicer/invoices/logged') ? '- Logged':'') }}
		{{ (Request::is('admin/invoicer/invoices/invoiced') ? '- Invoiced':'') }}
		{{ (Request::is('admin/invoicer/invoices/paid') ? '- Paid':'') }}
		{{ (Request::is('admin/invoicer/invoices/unpaid') ? '- Unpaid':'') }}
	</span>
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Invoices and Estimates</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	@include('admin.invoicer.invoices.index.topbar')

	<div class="card">

			@if($invoices->count() > 0)
				<table id="" class="table table-hover table-stripped table-sm">
					<thead>
						<tr>
							<th>@sortablelink('id','Invoice #')</th>
							@if(Request::is('admin/invoicer/invoices') || Request::is('admin/invoicer/invoices/unpaid'))
								<th>@sortablelink('status','Status')</th>
							@endif

							@if(Request::is('admin/invoicer/invoices'))
								<th>@sortablelink('created_at','Created')</th>
								<th>@sortablelink('invoiced_at','Invoiced')</th>
								<th>@sortablelink('paid_at','Paid')</th>
							@endif
							@if(Request::is('admin/invoicer/invoices/logged'))
								<th>@sortablelink('created_at','Logged')</th>
							@endif
							@if(Request::is('admin/invoicer/invoices/invoiced'))
								<th>@sortablelink('invoiced_at','Invoiced')</th>
							@endif
							@if(Request::is('admin/invoicer/invoices/paid'))
								<th>@sortablelink('paid_at','Paid')</th>
							@endif
							@if(Request::is('admin/invoicer/invoices/unpaid'))
								<th>@sortablelink('created_at','Created')</th>
								<th>@sortablelink('invoiced_at','Invoiced')</th>
							@endif

							<th>@sortablelink('client.contact_name','Contact Name')</th>
							{{-- <th>@sortablelink('client.company_name','Company Name')</th> --}}
							<th class="text-right">@sortablelink('amount_charged','Charged')</th>
							<th class="text-right">@sortablelink('deposits','Deposits')</th>
							<th class="text-right">@sortablelink('discounts','Discounts')</th>
							<th class="text-right">@sortablelink('payments','Payments')</th>
							<th class="text-right">@sortablelink('total','Owed')</th>
							<th></th>
						</tr>
					</thead>

					<tbody>
						@foreach($invoices as $invoice)
						<tr>
							<td>{{ $invoice->id }}</td>
							@if(Request::is('admin/invoicer/invoices') || Request::is('admin/invoicer/invoices/unpaid'))
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
							@endif
							@if(Request::is('admin/invoicer/invoices'))
								<td>{{ $invoice->created_at }}</td>
								<td>{{ $invoice->invoiced_at }}</td>
								<td>{{ $invoice->paid_at }}</td>
							@endif

							@if(Request::is('admin/invoicer/invoices/logged'))
								<td>{{ $invoice->created_at }}</td>
							@endif
							@if(Request::is('admin/invoicer/invoices/invoiced'))
								<td>{{ $invoice->invoiced_at }}</td>
							@endif
							@if(Request::is('admin/invoicer/invoices/paid'))
								<td>{{ $invoice->paid_at }}</td>
							@endif
							@if(Request::is('admin/invoicer/invoices/unpaid'))
								<td>{{ $invoice->created_at }}</td>
								<td>{{ $invoice->invoiced_at }}</td>
							@endif
							{{-- @if(Request::is('admin/invoicer/invoices'))
							<td>{{ $invoice->created_at }}</td>
							@endif --}}
							{{-- <td>{{ $invoice->invoiced_at }}</td> --}}
							{{-- <td>{{ $invoice->paid_at }}</td> --}}
							{{-- <td><a href="{{ route('admin.invoicer.clients.show', $invoice->client->id) }}">{{ $invoice->client->company_name }}</a></td> --}}
							<td>
								@can('invoicer-client')
									<a href="{{ route('admin.invoicer.clients.show', $invoice->client->id) }}">{{ $invoice->client->contact_name }}</a>
								@else
									{{ $invoice->client->contact_name }}
								@endcan
							</td>
							{{-- <td>
								@can('invoicer-client')
									<a href="{{ route('admin.invoicer.clients.show', $invoice->client->id) }}">{{ $invoice->client->company_name }}</a>
								@else
									{{ $invoice->client->company_name }}
								@endcan
							</td> --}}
							<td class="text-right">{{ number_format($invoice->sub_total, 2, '.', ', ') }}$</td>
							<td class="text-right">{{ number_format($invoice->deposits, 2, '.', ', ') }}$</td>
							<td class="text-right">{{ number_format($invoice->discounts, 2, '.', ', ') }}$</td>
							<td class="text-right">{{ number_format($invoice->payments, 2, '.', ', ') }}$</td>
							<td class="text-right">{{ number_format($invoice->total, 2, '.', ', ') }}$</td>
							<td>
								<form action="{{ route('admin.invoicer.invoices.destroy',[$invoice->id]) }}" method="POST" 
									onsubmit="return confirm('Do you really want to delete this invoice and related items?\n\nThis will PERMANENTLY DELETE the invoice and related items.');"
									class="float-right">
									{{ csrf_field() }}

									{{-- @if(checkPerm('invoicer_invoice_edit')) --}}
										@if($invoice->status == 'logged' && $invoice->invoiceItems->count() > 0)
										{{-- @if($invoice->status == 'logged') --}}
											<a href="{{ route('admin.invoicer.invoices.status_invoiced', $invoice->id) }}" class="btn btn-sm btn-outline-primary" title="Invoice">
												<i class="far fa-fw fa-file-alt"></i>
												Invoice
											</a>
										@endif

										{{-- @if($invoice->status == 'invoiced' && $invoice->total == 0) --}}
										@if($invoice->status == 'invoiced')
											<a href="{{ route('admin.invoicer.invoices.status_paid', $invoice->id) }}" class="btn btn-sm btn-outline-primary" title="Paid">
												<i class="far fa-fw fa-money-bill-alt"></i>
												Paid
											</a>
										@endif

										@if($invoice->status == 'logged' && $invoice->invoiceItems->count() > 0)
											<a href="{{ route('admin.invoicer.activities.create', $invoice) }}" class="btn btn-sm btn-primary" title="New Activity">
												<i class="far fa-fw fa-plus-square"></i>
												Activity
											</a>
										@endif

									{{-- @if(checkPerm('invoicer_invoice_show')) --}}
										<a href="{{ route('admin.invoicer.invoices.show', $invoice->id) }}" class="btn btn-sm btn-outline-primary" title="View invoice">
											<i class="fa fa-fw fa-eye"></i>
											View
										</a>
									{{-- @endif --}}

									{{-- @if(checkPerm('invoicer_invoice_edit')) --}}
										@if(!$invoice->paid_at)
										<a href="{{ route('admin.invoicer.invoices.edit', $invoice->id) }}" class="btn btn-sm btn-primary" title="Edit invoice">
											<i class="fa fa-fw fa-edit"></i>
											Edit
										</a>
										@endif
									{{-- @endif --}}

									<input type="hidden" name="_method" value="DELETE" />
									{{-- @if(checkPerm('invoicer_invoice_delete')) --}}
										@if(!$invoice->paid_at)
											<button type="submit" class="btn btn-sm btn-danger" title="Delete invoice">
												<i class="fa fa-fw fa-trash-alt"></i>
												Delete
											</button>
										@endif
									{{-- @endif --}}
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<div class="card-body">
					No invoices found in the system.
				</div>
			@endif
		{{-- </div> --}}

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

@endsection