@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
	<i class="{{ config('icons.edit') }}"></i>
	Invoicer :: Edit Estimate #{{ $invoice->id }}
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
	<li class="breadcrumb-item"><a href="{{ route('admin.invoicer.estimates') }}">Estimates</a></li>
	<li class="breadcrumb-item">Edit Estimate</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	<form action="{{ route('admin.invoicer.estimates.update', $invoice->id) }}" method="POST">
		@csrf
		@method('PUT')

		@include('admin.invoicer.estimates.edit.topbar')

		<div class="card">
			
			<div class="card-body">
				
				<div class="row">
					
					<div class="col-sm-9">

						@include('admin.invoicer.estimates.edit.fields.client')
						@include('admin.invoicer.estimates.edit.fields.notes')
					
						<div class="row">
							{{-- @include('admin.invoicer.estimates.edit.fields.quotedDate') --}}
							@include('admin.invoicer.estimates.edit.fields.loggedDate')
							@include('admin.invoicer.estimates.edit.fields.estimatedDate')
							@include('admin.invoicer.estimates.edit.fields.invoicedDate')
							@include('admin.invoicer.estimates.edit.fields.paidDate')
						</div>
					</div> <!-- End of col-9 -->

					<div class="col-sm-3">
						@include('admin.invoicer.estimates.edit.fields.status')
						@include('admin.invoicer.estimates.edit.fields.subtotal')
						@include('admin.invoicer.estimates.edit.fields.hst')
						@include('admin.invoicer.estimates.edit.fields.payments')
						@include('admin.invoicer.estimates.edit.fields.deposits')
						@include('admin.invoicer.estimates.edit.fields.discounts')
						@include('admin.invoicer.estimates.edit.fields.total')
					</div><!-- End of col-3 -->

				</div> <!-- End of row -->

			</div><!-- End card-body -->

			<div class="card-footer">
				{!! Config::get('settings.formFieldsRequired') !!}
			</div>

		</div>

	</form>

		
	@include('admin.invoicer.estimates.edit.billables')

	@if ($invoice->invoiceItems->count() > 0)
		@include('admin.invoicer.estimates.edit.activities')
	@endif

@endsection

@section('scripts')
<script>
   $("#datePickerEstimated").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerLogged").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerInvoiced").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
@endsection
