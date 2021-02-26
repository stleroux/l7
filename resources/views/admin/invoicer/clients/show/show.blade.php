@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.invoicer-clients') }}"></i>
   Invoicer Client Information
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Client Information</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	@include('admin.invoicer.clients.show.topbar')

	<div class="card">

		<div class="card-body">
			<div class="row">
				<div class="col-sm-12 col-md-8">
					<div class="form-group">
						<label for="owner_name">Contact Name</label>
						<input type="text" name="owner_name" value="{{ $client->contact_name }}" class="form-control" readonly />
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" name="" value="{{ $client->address_1 }}" class="form-control" readonly />
						@if($client->address_2)
							<input type="text" name="" value="{{ $client->address_2 }}" class="form-control" readonly />
						@endif
					</div>

					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="form-group">
								<label for="city">City</label>
								<input type="text" name="" value="{{ $client->city }}" class="form-control" readonly />
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="form-group">
								<label for="province">Province</label>
								<input type="text" name="" value="{{ $client->province }}" class="form-control" readonly />
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div class="form-group">
								<label for="postal_code">Postal Code</label>
								<input type="text" name="" value="{{ $client->postal_code }}" class="form-control" readonly />
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="notes">Notes</label>
								<textarea name="notes" id="notes" rows="4" class="form-control" readonly>{{ $client->notes }}</textarea>
							</div>
						</div>

						<div class="col-sm-12 col-md-3 col-lg-2">
							<div class="form-group">
								<label for="Sales">Total Sales</label>
								<input type="text" name="sales" value="{{ number_format($client->invoices->sum('sub_total'), 2, '.', ', ') }} $" class="form-control text-right" readonly />
							</div>
						</div>

						<div class="col-sm-12 col-md-3 col-lg-2">
							<div class="form-group">
								<label for="discounts">Discounts</label>
								<input type="text" name="discounts" value="{{ number_format($client->invoices->sum('discounts'), 2, '.', ', ') }} $" class="form-control text-right" readonly />
							</div>
						</div>

						<div class="col-sm-12 col-md-3 col-lg-2">
							<div class="form-group">
								<label for="Payments">Payments</label>
								<input type="text" name="payments" value="{{ number_format($client->invoices->sum('payments') + $client->invoices->sum('deposits'), 2, '.', ', ') }} $" class="form-control text-right" readonly />
							</div>
						</div>

						<div class="col-sm-12 col-md-3 col-lg-2">
							<div class="form-group">
								<label for="owing">Total Owing</label>
								<input type="text" name="owing" value="{{ number_format($client->invoices->sum('total'), 2, '.', ', ') }} $" class="form-control text-right" readonly />
							</div>
						</div>

					</div>
				</div>

				<div class="col-sm12 col-md-4">
					<div class="form-group">
						<label for="company_name">Company Name</label>
						<input type="text" name="company_name" value="{{ $client->company_name }}" class="form-control" readonly >
					</div>
					<div class="form-group">
						<label for="telephone">Telephone</label>
						<input type="text" name="telephone" value="{{ $client->telephone }}" class="form-control" readonly />
					</div>
					<div class="form-group">
						<label for="cell">Cell</label>
						<input type="text" name="cell" value="{{ $client->cell }}" class="form-control" readonly />
					</div>
					<div class="form-group">
						<label for="fax">Fax</label>
						<input type="text" name="fax" value="{{ $client->fax }}" class="form-control" readonly />
					</div>
					<div class="form-group">
						<label for="email">Email Address</label>
						<input type="text" name="email" value="{{ $client->email }}" class="form-control" readonly />
					</div>
					<div class="form-group">
						<label for="website_address">Website Address</label>
						<input type="text" name="website" value="{{ $client->website }}" class="form-control" readonly />
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="card mt-2">
		<div class="card-header">Related Invoices</div>
		
		@if($client->invoices->count() > 0)
			<table class="table table-sm table-hover">
				<thead>
					<tr>
						<th>Invoice N<sup>o</sup></th>
						<th>Create Date</th>
						<th>Amount</th>
						<th>Discounts</th>
						<th>Deposits</th>
						<th>Payments</th>
						<th>Owing</th>
						<th>Status</th>
						@can('invoicer-invoice')
							<th colspan="4"></th>
						@endcan
					</tr>
				</thead>
				<tbody>
					@foreach($client->invoices as $invoice)
						<tr class="
								{{ ($invoice->total != 0) ? 'text-danger' : '' }}
								{{ ($invoice->total == 0) ? 'text-success' : '' }}
						">
							<td>{{ $invoice->id }}</td>
							<td>{{ $invoice->created_at }}</td>
							<td>{{ number_format($invoice->sub_total, 2, '.', ', ') }}$</td>
							<td>{{ number_format($invoice->discounts, 2, '.', ', ') }}$</td>
							<td>{{ number_format($invoice->deposits, 2, '.', ', ') }}$</td>
							<td>{{ number_format($invoice->payments, 2, '.', ', ') }}$</td>
							<td>{{ number_format($invoice->total, 2, '.', ', ') }}$</td>
							<td>{{ ucfirst($invoice->status) }}</td>							
							@can('invoicer-invoice')
								<form action="{{ route('admin.invoicer.invoices.destroy',[$invoice->id]) }}" method="POST" onsubmit="return confirm('Do you really want to delete this invoice?');">
									<input type="hidden" name="_method" value="DELETE" />
									<td width="76px">
										<a href="{{ route('admin.invoicer.invoices.show', $invoice->id) }}" class="btn btn-sm btn-outline-primary">
											<i class="fa fa-eye"></i>
											View
										</a>
									</td>
									<td width="70px">
										@if($invoice->status != "paid")
											<a href="{{ route('admin.invoicer.invoices.edit', $invoice->id) }}" class="btn btn-sm btn-primary">
												<i class="fa fa-edit"></i>
												Edit
											</a>
										@endif
									</td>
									<td width="85px">
										@if($invoice->status != "paid")
											<button type="submit" class="btn btn-sm btn-danger">
												<i class="fa fa-trash-alt"></i>
												Delete
											</button>
										@endif
									</td>
								</form>
							@endcan
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<div class="card-body">
				No related invoices found for this client.
			</div>
		@endif
	</div>

	@include('common.audits')
	
@endsection
