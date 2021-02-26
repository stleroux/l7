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

						@include('admin.invoicer.invoices.edit.fields.client')
						@include('admin.invoicer.invoices.edit.fields.notes')
					
						<div class="row">
							@include('admin.invoicer.invoices.edit.fields.estimateDate')
							@include('admin.invoicer.invoices.edit.fields.loggedDate')
							@include('admin.invoicer.invoices.edit.fields.invoicedDate')
							@include('admin.invoicer.invoices.edit.fields.paidDate')
						</div>
					</div> <!-- End of col-9 -->

					<div class="col-sm-3">
						@include('admin.invoicer.invoices.edit.fields.status')
						@include('admin.invoicer.invoices.edit.fields.subtotal')
						@include('admin.invoicer.invoices.edit.fields.hst')
						@include('admin.invoicer.invoices.edit.fields.payments')
						@include('admin.invoicer.invoices.edit.fields.deposits')
						@include('admin.invoicer.invoices.edit.fields.discounts')
						@include('admin.invoicer.invoices.edit.fields.total')
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
