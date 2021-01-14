@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.edit') }}"></i>
   Invoicer :: Edit Invoice #{{ $invoice->id }}
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer.invoices') }}">Invoices</a></li>
   <li class="breadcrumb-item">Edit Invoice</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
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
						<div class="form-group {{ $errors->has('client_id') ? 'has-error' : '' }}">
							<label for="client_id" class="required">Client</label>
							<select name="client_id" class="form-control">
								<option value="{{ $invoice->client_id }}">{{ $invoice->client->company_name }}</option>
								@foreach($clients as $client)
									<option value="{{ $client->id }}">{{ $client->company_name }}</option>
									}
								@endforeach
							</select>
							<span class="text-danger">{{ $errors->first('client_id') }}</span>
						</div>

						<!-- NOTES -->
						<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
							<label for="notes">Notes</label>
							<textarea name="notes" rows="4" class="form-control">{{ $invoice->notes }}</textarea>
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
										@if($invoice->invoiced_at || $invoice->status == 'paid')
											<input type="text" name="created_at" value="{{ $invoice->invoiced_at }}" class="form-control" readonly />
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
						<div class="form-group form-inline {{ $errors->has('status') ? 'has-error' : '' }}">
							<label for="status" class="col-6 control-label required">Status</label>
							<select name="status" class="col-6 form-control pull-right">
								<option value="invoiced" {{ ($invoice->status == 'invoiced' ? 'selected' : '') }}>Invoiced</option>
								<option value="logged" {{ ($invoice->status == 'logged' ? 'selected' : '') }}>Logged</option>
								<option value="paid" {{ ($invoice->status == 'paid' ? 'selected' : '') }}>Paid</option>
							</select>
							<span class="text-danger">{{ $errors->first('status') }}</span>
						</div>

						<!-- SUB TOTAL -->
						<div class="form-group form-inline">
							<label for="amount_charged" class="col-6">Amount</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="amount_charged"
									value="{{ number_format($invoice->amount_charged, 2, '.', ' ') }}"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

						<!-- HST -->
						<div class="form-group form-inline">
							<label for="hst" class="col-6">HST</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="hst"
									value="{{ number_format($invoice->hst, 2, '.', ' ') }}"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

						<!-- SUB TOTAL -->
						{{-- <div class="form-group form-inline">
							<label for="amount_charged" class="col-6">SubTotal</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="amount_charged"
									value="{{ number_format($invoice->sub_total, 2, '.', ' ') }}"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div> --}}

						<!-- PAYMENTS -->
						<div class="form-group form-inline">
							<label for="amount_charged" class="col-6">Payments</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="amount_charged"
									value="{{ number_format($invoice->payments, 2, '.', ' ') }}"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

						<!-- DEPOSIT -->
						<div class="form-group form-inline">
							<label for="amount_charged" class="col-6">Deposit</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="amount_charged"
									value="{{ number_format($invoice->deposits, 2, '.', ' ') }}"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>


						<!-- DISCOUNT -->
						<div class="form-group form-inline">
							<label for="amount_charged" class="col-6">Discount</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="amount_charged"
									value="{{ number_format($invoice->discounts, 2, '.', ' ') }}"
									class="form-control text-right"
									readonly
								/>
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
						</div>

						<!-- TOTAL -->
						<div class="form-group form-inline">
							<label for="total" class="col-6">Total Owing</label>
							<div class="input-group col-6 p-0">
								<input
									type="text"
									name="total"
									value="{{ number_format($invoice->total, 2, '.', ' ') }}"
									class="form-control text-right"
									readonly
								/>
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

		
@include('admin.invoicer.invoices.edit.billables')
@if ($invoice->invoiceItems->count() > 0)
	@include('admin.invoicer.invoices.edit.activities')
@endif








		


@endsection
