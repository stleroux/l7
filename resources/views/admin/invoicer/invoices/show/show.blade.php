@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.edit') }}"></i>
   Invoicer :: Show Invoice
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer.invoices') }}">Invoices</a></li>
   <li class="breadcrumb-item">Show</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')



	@include('admin.invoicer.invoices.show.topbar')

	<div class="card pb-0 mb-0">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-4">
					<h1 class="text-center">INVOICE</h1>
				</div>
				<div class="col-sm-8">
					<div class="col-sm-12">
						<h3 class="text-center">
							{{ Config::get('invoicer.companyName') }}
						</h3>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							{{ Config::get('invoicer.address_1') . ', ' }}
							{{ (Config::get('invoicer.address_2')) ? Config::get('invoicer.address_2') . ', ' : '' }}
							{{ (Config::get('invoicer.city')) ? Config::get('invoicer.city') . ', ' : '' }}
							{{ (Config::get('invoicer.state')) ? Config::get('invoicer.state') . ', ' : '' }}
							{{ (Config::get('invoicer.zip')) ? Config::get('invoicer.zip') : '' }}
							<br />
							@if(Config::get('invoicer.telephone') && (Config::get('invoicer.fax')))
								<i class='fas fa-phone'></i> {{ Config::get('invoicer.telephone') }} &nbsp;
								<i class="fas fa-fax"></i> {{ Config::get('invoicer.fax') }}
							@elseif(Config::get('invoicer.telephone'))
								<i class='fas fa-phone'></i> {{ Config::get('invoicer.telephone') }}
							@elseif (Config::get('invoicer.fax'))
								<i class="fas fa-fax"></i> {{ Config::get('invoicer.fax') }}
							@endif

							<br />
							@if(Config::get('invoicer.email') && (Config::get('invoicer.website')))
								<i class="fas fa-at"></i> {{ Config::get('invoicer.email') }}
								&nbsp;
								<a href="http://thewoodbarn.ca" target="_blank">
									<i class="fas fa-newspaper"></i> {{ Config::get('invoicer.website') }}
								</a>
							@elseif(Config::get('invoicer.email'))
								<i class="fas fa-at"></i> {{ Config::get('invoicer.email') }}
							@elseif(Config::get('invoicer.website'))
								<a href="http://thewoodbarn.ca" target="_blank">
									<i class="fas fa-newspaper"></i> {{ Config::get('invoicer.website') }}
								</a>
							@endif

							<br />
							@if(Config::get('invoicer.wsibNo') && (Config::get('invoicer.hstNo')))
								WSIB N<sup>o</sup>: {{ Config::get('invoicer.wsibNo') }} &nbsp;
								HST N<sup>o</sup>: {{ Config::get('invoicer.hstNo') }}
							@elseif(Config::get('invoicer.wsibNo'))
								WSIB N<sup>o</sup>: {{ Config::get('invoicer.wsibNo') }}
							@elseif(Config::get('invoicer.hstNo'))
								HST N<sup>o</sup>: {{ Config::get('invoicer.hstNo') }}
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="card-body">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">Invoice Information</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-4">
									<div><strong>Billed To</strong></div>
										<div>{{ $invoice->user->company_name }}</div>
										<div>{{ $invoice->user->address }}</div>
										<div>{{ $invoice->user->city }}, {{ $invoice->user->province }}</div>
										<div>{{ $invoice->user->postal_code }}</div>
								</div>
								<div class="col-sm-3">
									<div><strong>Invoice N<sup>o</sup></strong></div>
									<div>{{ $invoice->id }}</div>
								</div>
								<div class="col-sm-3">
									{{-- <div>&nbsp;</div> --}}
									@if($invoice->invoiced_at)
										<div><strong>Invoiced</strong></div>
										<div>{{ $invoice->invoiced_at }}</div>
									@else
										<div><strong>Logged</strong></div>
										<div>{{ $invoice->created_at }}</div>
									@endif
								</div>
								<div class="col-sm-2">
									<div><strong>Paid</strong></div>
										<div>{{ $invoice->paid_at }}</div>
								</div>
							</div>
							@if($invoice->work_description)
								<div class="row">
									<div class="col-sm-12">
										<div class="text-muted">Work Description</div>
										<div class="table" style="padding: 10px">{{ $invoice->work_description }}</div>
									</div>
								</div>
							@endif
						</div>
					</div>
				</div>
			</div>

			<br />

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">Billable Items</div>
						{{-- <div class="card-body"> --}}
						@if($invoice->invoiceItems->count() > 0)
							<table class="table table-sm table-striped">
								<thead>
									<tr>
										{{-- <th>ID</th> --}}
										<th>Product</th>
										<th nowrap="nowrap">Work Date</th>
										<th>Notes</th>
										<th class="text-center">Quantity</th>
										<th class="text-right">Price</th>
										<th class="text-right">Amount</th>
									</tr>
								</thead>
								<tbody>
									{{-- @foreach($invoice->invoiceItems->sortByDesc('work_date') as $item) --}}
									@foreach($invoice->invoiceItems->sortByDesc('id') as $item)
										<tr>
											<td>{{ $item->product->details }}</td>
											<td nowrap="nowrap">{{ $item->work_date }}</td>
											<td>{!! nl2br(e($item->notes)) !!}</td>
											<td class="text-center" nowrap="nowrap">{{ $item->quantity }}</td>
											<td class="text-right" nowrap="nowrap">{{ number_format($item->price, 2, '.', ' ') }}$</td>
											<td class="text-right" nowrap="nowrap">{{ number_format($item->total, 2, '.', ' ') }}$</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						@else
							<div class="card-body">
								No related billable items found.
							</div>
						@endif
						{{-- </div> --}}
					</div>
				</div>
			</div>

			<br />
			
			<div class="col-sm-12">
				<div class="row">
					<div class="card w-75">
						<div class="card-header">Terms and Conditions</div>
						<div class="card-body">
							@include('admin.invoicer.termsAndConditions')							
						</div>
						{{-- {{ Config::get('invoicer.termsAndConditions') }} --}}
					</div>
					<div class="card w-25 ">
						{{-- <div class="col-sm-2 text-right"> --}}
							<div class="row">
								<div class="col-sm-6 text-right">
									<b>SubTotal</b>
								</div>
								<div class="col-sm-6">
									<span class="float-right">{{ ($invoice->amount_charged ? number_format($invoice->amount_charged, 2, '.', ' ') : '0.00') }}$</span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 text-right">
									<b>HST</b>
								</div>
								<div class="col-sm-6">
									<span class="float-right">{{ number_format($invoice->hst, 2, '.', ' ') }}$</span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6 text-right">
									<strong>Total</strong>
								</div>
								<div class="col-sm-6">
									<span class="float-right">{{ number_format($invoice->sub_total, 2, '.', ' ') }}$</span>
								</div>
							</div>
						{{-- </div> --}}
					</div>
				</div>
			</div>

		</div>
{{-- 			<div class="card border-0">
				<div class="row">
					<div class="col-sm-10 text-right">
						<b>SubTotal</b>
					</div>
					<div class="col-sm-2">
						<span class="pull-right">{{ ($invoice->amount_charged ? number_format($invoice->amount_charged, 2, '.', ' ') : '0.00') }}$</span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10 text-right">
						<b>HST</b>
					</div>
					<div class="col-sm-2">
						<span class="pull-right">{{ number_format($invoice->hst, 2, '.', ' ') }}$</span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10 text-right">
						<strong>Total</strong>
					</div>
					<div class="col-sm-2">
						<span class="pull-right">{{ number_format($invoice->sub_total, 2, '.', ' ') }}$</span>
					</div>
				</div>
			</div> --}}
			
		</div>
{{-- 		<div class="card-footer">
			{!! Config::get('invoicer.termsAndConditions') !!}
		</div> --}}
	{{-- </div> --}}

@endsection
				