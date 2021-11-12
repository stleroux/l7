@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="far fa-file-alt"></i>
	<span class="h3">Invoicer :: Estimates</span>
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Estimates</li>
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
			<table id="datatable" class="table table-hover table-stripped table-sm">
				<thead>
					<tr>
						{{-- <th>@sortablelink('id','Invoice #')</th> --}}
						<th>Estimate #</th>
						{{-- @if(Request::is('admin/invoicer/invoices') || Request::is('admin/invoicer/invoices/unpaid')) --}}
							{{-- <th>@sortablelink('status','Status')</th> --}}
							{{-- <th>Status</th> --}}
						{{-- @endif --}}

						{{-- @if(Request::is('admin/invoicer/invoices')) --}}
							{{-- <th>@sortablelink('created_at','Created')</th> --}}
							<th>Created</th>
							{{-- <th>@sortablelink('invoiced_at','Invoiced')</th> --}}
							{{-- <th>@sortablelink('paid_at','Paid')</th> --}}
						{{-- @endif --}}
						{{-- @if(Request::is('admin/invoicer/invoices/logged')) --}}
							{{-- <th>@sortablelink('created_at','Logged')</th> --}}
						{{-- @endif --}}
						{{-- @if(Request::is('admin/invoicer/invoices/invoiced')) --}}
							{{-- <th>@sortablelink('invoiced_at','Invoiced')</th> --}}
						{{-- @endif --}}
						{{-- @if(Request::is('admin/invoicer/invoices/paid')) --}}
							{{-- <th>@sortablelink('paid_at','Paid')</th> --}}
						{{-- @endif --}}
						{{-- @if(Request::is('admin/invoicer/invoices/unpaid')) --}}
							{{-- <th>@sortablelink('created_at','Created')</th> --}}
							{{-- <th>@sortablelink('invoiced_at','Invoiced')</th> --}}
						{{-- @endif --}}

						{{-- <th>@sortablelink('client.last_name','Last Name')</th> --}}
						<th>Last Name</th>
						{{-- <th>@sortablelink('client.first_name','First Name')</th> --}}
						<th>First Name</th>
						{{-- <th>@sortablelink('client.company_name','Company Name')</th> --}}
						<th>Company Name</th>
						{{-- <th class="text-right">@sortablelink('amount_charged','Charged')</th> --}}
						<th class="text-right">Charged&nbsp;</th>
						{{-- <th class="text-right">@sortablelink('deposits','Deposits')</th> --}}
						<th class="text-right">Deposits&nbsp;</th>
						{{-- <th class="text-right">@sortablelink('discounts','Discounts')</th> --}}
						<th class="text-right">Discounts&nbsp;</th>
						{{-- <th class="text-right">@sortablelink('payments','Payments')</th> --}}
						<th class="text-right">Payments&nbsp;</th>
						{{-- <th class="text-right">@sortablelink('total','Owed')</th> --}}
						<th class="text-right">Owed&nbsp;</th>
						<th class="no-sort"></th>
					</tr>
				</thead>

				<tbody>
					@foreach($invoices as $invoice)
					<tr>
						<td>{{ $invoice->id }}</td>
						{{-- @if(Request::is('admin/invoicer/invoices') || Request::is('admin/invoicer/invoices/unpaid'))
							<td>
								@if($invoice->status === 'quote')
									<span class="badge badge-secondary" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
								@elseif($invoice->status === 'estimate')
									<span class="badge badge-info" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
								@elseif($invoice->status === 'invoiced')
									<span class="badge badge-warning" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
								@else($invoice->status === 'paid')
									<span class="badge badge-success" style="font-size: 13px">{{ ucfirst($invoice->status) }}</span>
								@endif
							</td>
						@endif --}}
							<td>{{ $invoice->created_at }}</td>
						{{-- @if(Request::is('admin/invoicer/invoices'))
							<td>{{ $invoice->created_at }}</td>
							<td>{{ $invoice->invoiced_at }}</td>
							<td>{{ $invoice->paid_at }}</td>
						@endif --}}

						{{-- @if(Request::is('admin/invoicer/invoices/logged'))
							<td>{{ $invoice->created_at }}</td>
						@endif --}}
						{{-- @if(Request::is('admin/invoicer/invoices/invoiced'))
							<td>{{ $invoice->invoiced_at }}</td>
						@endif --}}
						{{-- @if(Request::is('admin/invoicer/invoices/paid'))
							<td>{{ $invoice->paid_at }}</td>
						@endif --}}
						{{-- @if(Request::is('admin/invoicer/invoices/unpaid'))
							<td>{{ $invoice->created_at }}</td>
							<td>{{ $invoice->invoiced_at }}</td>
						@endif --}}

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

								@if($invoice->status == 'estimate')
									<a href="{{ route('admin.invoicer.invoices.status_logged', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Mark as Logged">
										{{-- <i class="far fa-fw fa-file-alt"></i> --}}
										<i class="{{ config('icons.invoicer-markAsLogged') }}"></i>
										{{-- Log --}}
									</a>
								@endif

								@if($invoice->status == 'estimate' || $invoice->status == 'logged')
									<a href="{{ route('admin.invoicer.invoices.status_invoiced', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Mark as Invoiced">
										{{-- <i class="far fa-fw fa-file-alt"></i> --}}
										<i class="{{ config('icons.invoicer-markAsInvoiced') }}"></i>
										{{-- Invoice --}}
									</a>
									<a href="{{ route('admin.invoicer.activities.create', $invoice) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="New Activity">
										{{-- <i class="far fa-fw fa-plus-square"></i> --}}
										<i class="{{ config('icons.invoicer-newActivity') }}"></i>
										{{-- Activity --}}
									</a>
									<a href="{{ route('admin.invoicer.invoiceItems.create', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="New Billable">
										{{-- <i class="far fa-fw fa-plus-square"></i> --}}
										<i class="{{ config('icons.invoicer-newBillable') }}"></i>
										{{-- Billable --}}
									</a>
								@endif

								@if($invoice->status == 'invoiced')
									<a href="{{ route('admin.invoicer.invoices.status_paid', $invoice->id) }}" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" title="Mark as Paid">
										{{-- <i class="far fa-fw fa-money-bill-alt"></i> --}}
										<i class="{{ config('icons.invoicer-markAsPaid') }}"></i>
										{{-- Paid --}}
									</a>
								@endif

								@if(Request::is('admin/invoicer/invoices/estimates'))
									<a href="{{ route('admin.invoicer.invoices.show', $invoice->id) }}" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="View Estimate">
										<i class="{{ config('icons.view') }}"></i>
										{{-- View --}}
									</a>
								@else
									<a href="{{ route('admin.invoicer.invoices.show', $invoice->id) }}" class="btn btn-sm btn-outline-primary" data-toggle="tooltip" title="View Invoice">
										<i class="{{ config('icons.view') }}"></i>
										{{-- View --}}
									</a>
								@endif

								@if(!$invoice->paid_at)
									@if(Request::is('admin/invoicer/invoices/estimates'))
										<a href="{{ route('admin.invoicer.invoices.edit', [$invoice->id, 'type'=>'estimate']) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit Estimate">
											{{-- <i class="fa fa-fw fa-edit"></i> --}}
											<i class="{{ config('icons.edit') }}"></i>
											{{-- Edit --}}
										</a>
									@else
										<a href="{{ route('admin.invoicer.invoices.edit', $invoice->id) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit Invoice">
											<i class="{{ config('icons.edit') }}"></i>
											{{-- Edit --}}
										</a>
									@endif
								@endif

								<input type="hidden" name="_method" value="DELETE" />

								@if(!$invoice->paid_at)
									@if(Request::is('admin/invoicer/invoices/estimates'))
										<button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Estimate">
											<i class="{{ config('icons.trash') }}"></i>
											{{-- Delete --}}
										</button>
									@else
										<button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Invoice">
											<i class="{{ config('icons.trash') }}"></i>
											{{-- Delete --}}
										</button>
									@endif
								@endif

							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			{{-- <div class="card-body">
				@if(Request::is('admin/invoicer/invoices/estimates'))
					No estimates found in the system.
				@else
					No invoices found in the system.
				@endif
			</div> --}}
			{{ config('settings.noRecordsFound') }}
		@endif

		{{-- @if($invoices->count() > 0)
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
		@endif --}}
		</div>
	</div>

@endsection