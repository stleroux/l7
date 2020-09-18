@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.edit') }}"></i>
   Invoicer :: Edit Invoice
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Edit Invoice</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section('content')

	<form action="{{ route('admin.invoicer.invoices.update', $invoice->id) }}" method="POST">
		@csrf
		@method('PUT')

		@include('admin.invoicer.invoices.edit.topbar')

		<div class="card">
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-9">

						<!-- CLIENT -->
						<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
							<label for="user_id" class="required">Client</label>
							<select name="user_id" class="form-control">
								<option value="{{ $invoice->user_id }}">{{ $invoice->user->company_name }}</option>
								@foreach($clients as $client)
									<option value="{{ $client->id }}">{{ $client->company_name }}</option>
									}
								@endforeach
							</select>
							<span class="text-danger">{{ $errors->first('user_id') }}</span>
						</div>

						<!-- NOTES -->
						<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
							<label for="notes">Notes</label>
							<textarea name="notes" rows="4" class="form-control">{{ $client->notes }}</textarea>
							<span class="text-danger">{{ $errors->first('notes') }}</span>
							<small id="passwordHelpBlock" class="form-text text-muted">
								These notes will not be shown on invoice
							</small>
						</div>
					
						<div class="row">
							<!-- LOGGED DATE -->
							<div class="col-sm-3">
								<div class="form-group">
									<label for="created_at">Logged Date</label>
									<div class="input-group">
										<input type="text" name="created_at" class="form-control" value="{{ $invoice->created_at }}" readonly />
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="far fa-calendar-alt"></i>
											</span>
										</div>
									</div>
								</div>
							</div>

							<!-- INVOICED DATE -->
							<div class="col-sm-3">
								<div class="form-group {{ $errors->has('invoiced_at') ? 'has-error' : '' }}">
									<label for="invoiced_at">Invoiced Date</label>
									<div class="input-group">
										@if($invoice->invoiced_at)
											<input type="text" name="created_at" value="{{ $invoice->created_at }}" class="form-control" readonly />
										@else
											<input type="text" name="invoiced_at" id="datePicker" value="{{ $invoice->invoiced_at }}" class="form-control" />
										@endif
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="far fa-calendar-alt"></i>
											</span>
										</div>
										<span class="text-danger">{{ $errors->first('invoiced_at') }}</span>
									</div>
									<span><small class="form-text">Ensure you select Invoiced from the Status dropdown</small></span>
								</div>
							</div>

							<!-- PAID DATE -->
							<div class="col-sm-3">
								<div class="form-group {{ $errors->has('paid_at') ? 'has-error' : '' }}">
									<label for="paid_at">Paid Date</label>
									<div class="input-group">
										@if($invoice->paid_at)
											<input type="text" name="created_at" value="{{ $invoice->created_at }}" class="form-control" readonly />
										@else
											<input type="text" name="created_at" value="{{ $invoice->paid_at }}" class="form-control" />
										@endif
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="far fa-calendar-alt"></i>
											</span>
										</div>
										<span class="text-danger">{{ $errors->first('paid_at') }}</span>
									</div>
									<span><small class="form-text">Ensure you select Paid from the Status dropdown</small></span>
								</div>
							</div>

						</div>
					</div> <!-- End of col-9 -->

					<div class="col-md-3">

						<!-- STATUS -->
						<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
							<label for="status" class="required">Status</label>
							<select name="status" class="form-control">
								<option value="invoiced" {{ ($invoice->status == 'invoiced' ? 'selected' : '') }}>Invoiced</option>
								<option value="logged" {{ ($invoice->status == 'logged' ? 'selected' : '') }}>Logged</option>
								<option value="paid" {{ ($invoice->status == 'paid' ? 'selected' : '') }}>Paid</option>
							</select>
							<span class="text-danger">{{ $errors->first('status') }}</span>
						</div>

						<!-- SUB TOTAL -->
						<div class="form-group">
							<label for="amount_charged">SubTotal</label>
							<div class="input-group">
								<input type="text" name="amount_charged" value="{{ number_format($invoice->amount_charged, 2, '.', ' ') }}" class="form-control text-right" readonly />
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

						<!-- HST -->
						<div class="form-group">
							<label for="hst">HST</label>
							<div class="input-group">
								<input type="text" name="hst" value="{{ number_format($invoice->hst, 2, '.', ' ') }}" class="form-control text-right" readonly />
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

						<!-- TOTAL -->
						<div class="form-group">
							<label for="total">Total Charged</label>
							<div class="input-group">
								<input type="text" name="total" value="{{ number_format($invoice->sub_total, 2, '.', ' ') }}" class="form-control text-right" readonly />
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

					</div><!-- End of col-3 -->
				</div> <!-- End of row -->
			</div><!-- End card-body -->

			<div class="card-footer">
				Fields marked with an<span class="required"></span> are required.
			</div>
		</div>
	</form>

		<br />
		<div class="card">

			<div class="card-header">
				<span class="h3">Billable Items</span>
				{{-- @if(checkPerm('invoicer_invoice_edit')) --}}
					@if($invoice->status == 'logged')
						<span class="float-right">
							<a href="{{ route('admin.invoicer.invoiceItems.create', $invoice->id) }}" class="btn btn-sm btn-primary">
								<i class="far fa-plus-square"></i>
								Add Billable
							</a>
						</span>
					@endif
				{{-- @endif --}}
			</div>

			{{-- <div class="card-body"> --}}
				@if($invoice->invoiceItems->count() > 0)
					<table class="table table-sm table-striped">
						<thead>
							<tr>
								<th>Product</th>
								<th>Work Date</th>
								<th>Notes</th>
								<th class="text-center">Quantity</th>
								<th class="text-right">Price</th>
								<th class="text-right">Total</th>
								@if($invoice->status == 'logged')
									<th></th>
								@endif
							</tr>
						</thead>
						<tbody>
							{{-- @foreach($invoice->invoiceItems->sortByDesc('work_date') as $item) --}}
							@foreach($invoice->invoiceItems->sortByDesc('id') as $item)
								<tr>
									<td>{{ $item->product->details }}</td>
									<td nowrap="nowrap">{{ $item->work_date }}</td>
									<td>{!! nl2br(e($item->notes)) !!}</td>
									<td class="text-center">{{ $item->quantity }}</td>
									<td class="text-right" nowrap="nowrap">{{ number_format($item->price, 2, '.', ' ') }}$</td>
									<td class="text-right" nowrap="nowrap">{{ number_format($item->total, 2, '.', ' ') }}$</td>
									@if($invoice->status == 'logged')
										<td class="text-right" nowrap="nowrap">
											<form action="{{ route('admin.invoicer.invoiceItems.destroy',[$item->id]) }}" method="POST" onsubmit="return confirm('Do you really want to delete this billable item?');"
												class="pull-right">
												{{ csrf_field() }}
												<input type="hidden" name="_method" value="DELETE" />

												{{-- @if(checkPerm('invoicer_invoice_edit')) --}}
													<a href="{{ route('admin.invoicer.invoiceItems.edit', $item->id) }}" class="btn btn-sm btn-primary">
														<i class="fa fa-edit"></i>
														Edit
													</a>
												{{-- @endif --}}
												
												{{-- @if(checkPerm('invoicer_invoice_edit')) --}}
													<button type="submit" class="btn btn-sm btn-danger">
														<i class="fa fa-trash-alt"></i>
														Delete
													</button>
												{{-- @endif --}}
											</form>
										</td>
									@endif
								</tr>
							@endforeach
						</tbody>
					</table>
				@else
					<div class="card-body">
						No billable items found for this invoice.
					</div>
				@endif
			{{-- </div> --}}
		</div>

@endsection
