@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.invoicer-clients') }}"></i>
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

		{{-- <span class="float-right">
			<a href="{{ route('admin.invoicer.clients') }}" class="btn btn-sm btn-primary">
				<i class="fas fa-list"></i>
				Clients List
			</a>
		</span> --}}
		@include('admin.invoicer.clients.show.topbar')

<div class="card">
	
	{{-- <div class="card-header">
		<span class="h3">Client Information</span>
	</div> --}}
	
	<div class="card-body">
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<div class="form-group">
					{{-- {{ Form::label ('company_name', 'Company Name:')}} --}}
					<label for="company_name">Company Name</label>
					{{-- {{ Form::text ('company_name', $client->company_name, array('class'=>'form-control', 'readonly')) }} --}}
					<input type="text" name="company_name" value="{{ $client->company_name }}" class="form-control" readonly >
				</div>
				<div class="form-group">
					{{-- {{ Form::label ('address', 'Address:')}} --}}
					<label for="address">Address</label>
					{{-- {{ Form::text ('address_1', $client->address_1, array('class'=>'form-control', 'readonly')) }} --}}
					<input type="text" name="" value="{{ $client->address_1 }}" class="form-control" readonly />
					@if($client->address_2)
						{{-- {{ Form::text ('address_2', $client->address_2, array('class'=>'form-control', 'readonly')) }} --}}
						<input type="text" name="" value="{{ $client->address_2 }}" class="form-control" readonly />
					@endif
				</div>

				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="form-group">
							{{-- {{ Form::label ('city', 'City:')}} --}}
							<label for="city">City</label>
							{{-- {{ Form::text ('city', $client->city, array('class'=>'form-control', 'readonly')) }} --}}
							<input type="text" name="" value="{{ $client->city }}" class="form-control" readonly />
						</div>
					</div>
					<div class="col-sm-12 col-md-3">
						<div class="form-group">
							{{-- {{ Form::label ('province', 'Province:')}} --}}
							<label for="province">Province</label>
							{{-- {{ Form::text ('province', $client->province, array('class'=>'form-control', 'readonly')) }} --}}
							<input type="text" name="" value="{{ $client->province }}" class="form-control" readonly />
						</div>
					</div>
					<div class="col-sm-12 col-md-3">
						<div class="form-group">
							{{-- {{ Form::label ('postal_code', 'Postal Code:')}} --}}
							<label for="postal_code">Postal Code</label>
							{{-- {{ Form::text ('postal_code', $client->postal_code, array('class'=>'form-control', 'readonly')) }} --}}
							<input type="text" name="" value="{{ $client->postal_code }}" class="form-control" readonly />
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-group">
							{{-- {{ Form::label ('notes', 'Notes:')}} --}}
							<label for="notes">Notes</label>
							{{-- {{ Form::textarea ('notes', $client->notes, array('class'=>'form-control', 'readonly', 'rows'=>4)) }} --}}
							<textarea name="notes" id="notes" rows="4" class="form-control" readonly>{{ $client->notes }}</textarea>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm12 col-md-4">
				<div class="form-group">
					{{-- {{ Form::label ('owner_name', 'Contact Name:')}} --}}
					<label for="owner_name">Contact Name</label>
					{{-- {{ Form::text ('owner_name', $client->contact_name, array('class'=>'form-control', 'readonly')) }} --}}
					<input type="text" name="owner_name" value="{{ $client->contact_name }}" class="form-control" readonly />
				</div>
				<div class="form-group">
					{{-- {{ Form::label ('telephone', 'Telephone:')}} --}}
					<label for="telephone">Telephone</label>
					{{-- {{ Form::text ('telephone', $client->telephone, array('class'=>'form-control', 'readonly')) }} --}}
					<input type="text" name="telephone" value="{{ $client->telephone }}" class="form-control" readonly />
				</div>
				<div class="form-group">
					{{-- {{ Form::label ('cell', 'Cell:')}} --}}
					<label for="cell">Cell</label>
					{{-- {{ Form::text ('cell', $client->cell, array('class'=>'form-control', 'readonly')) }} --}}
					<input type="text" name="cell" value="{{ $client->cell }}" class="form-control" readonly />
				</div>
				<div class="form-group">
					{{-- {{ Form::label ('fax', 'Fax:')}} --}}
					<label for="fax">Fax</label>
					{{-- {{ Form::text ('fax', $client->fax, array('class'=>'form-control', 'readonly')) }} --}}
					<input type="text" name="fax" value="{{ $client->fax }}" class="form-control" readonly />
				</div>
				<div class="form-group">
					{{-- {{ Form::label ('email', 'Email Address:')}} --}}
					<label for="email">Email Address</label>
					{{-- {{ Form::text ('email', $client->email, array('class'=>'form-control', 'readonly')) }} --}}
					<input type="text" name="email" value="{{ $client->email }}" class="form-control" readonly />
				</div>
				<div class="form-group">
					{{-- {{ Form::label ('website_address', 'Website Address:')}} --}}
					<label for="website_address">Website Address</label>
					{{-- {{ Form::text ('website_address', $client->website, array('class'=>'form-control', 'readonly')) }} --}}
					<input type="text" name="website" value="{{ $client->website }}" class="form-control" readonly />
				</div>
			</div>
		</div>
	</div>
</div>

<div class="card mt-2">
	<div class="card-header">Related Invoices</div>
	
	@if($client->invoices->count() > 0)
		<table class="table table-sm table-striped">
			<thead>
				<tr>
					<th>Invoice N<sup>o</sup></th>
					<th>Create Date</th>
					<th>Amount</th>
					<th>Status</th>
					@can('invoicer-invoice')
						<th colspan="4"></th>
					@endcan
				</tr>
			</thead>
			<tbody>
				@foreach($client->invoices as $invoice)
					<tr>
						<td>{{ $invoice->id }}</td>
						<td>{{ $invoice->created_at }}</td>
						<td>{{ number_format($invoice->sub_total, 2, '.', ', ') }}$</td>
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
	
@endsection