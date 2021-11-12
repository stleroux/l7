@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
	<i class="{{ config('icons.edit') }}"></i>
	Invoicer :: Edit {{ Str::ucfirst($invoice->status) }} #{{ $invoice->id }}
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

	<form action="{{ route('admin.invoicer.invoices.update', $invoice) }}" method="POST">
		@csrf
		@method('PUT')

		@include('admin.invoicer.invoices.edit.topbar')

		<div class="card">
			
			<div class="card-body">
				
				<div class="row">
					
					<div class="col-sm-9">

						@include('admin.invoicer.invoices.edit.fields.client')
						@include('admin.invoicer.invoices.edit.fields.notes')
					
						@if($invoice->status == "quote")
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'])
								{{-- @include('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'']) --}}
							</div>
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>''])
							</div>
						@endif

						@if($invoice->status == "estimate")
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>''])
							</div>
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>''])
							</div>
						@endif

						@if($invoice->status == "invoiced")
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>''])
							</div>
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>''])
							</div>
						@endif

						@if($invoice->status == "paid")
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>'readonly'])
							</div>
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.workOrder', ['readOnly'=>''])
							</div>
						@endif

						@if($invoice->status == "workOrder")
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>'readonly'])
							</div>
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.workOrder', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.completed', ['readOnly'=>''])
							</div>
						@endif

						@if($invoice->status == "completed")
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>'readonly'])
							</div>
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.workOrder', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.completed', ['readOnly'=>'readonly'])
							</div>
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.shipped', ['readOnly'=>''])
								@include('admin.invoicer.invoices.edit.fields.dates.pickedUp', ['readOnly'=>''])
								@include('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>''])
							</div>
						@endif

						@if($invoice->status == "shipped" || $invoice->status == "pickedUp")
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>'readonly'])
							</div>
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.workOrder', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.completed', ['readOnly'=>'readonly'])
							</div>
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.shipped', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.pickedUp', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>''])
							</div>
						@endif

						@if($invoice->status == "canceled")
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.created', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.estimated', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.invoiced', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.paid', ['readOnly'=>'readonly'])
							</div>
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.workOrder', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.completed', ['readOnly'=>'readonly'])
							</div>
							<div class="row">
								@include('admin.invoicer.invoices.edit.fields.dates.shipped', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.pickedUp', ['readOnly'=>'readonly'])
								@include('admin.invoicer.invoices.edit.fields.dates.canceled', ['readOnly'=>'readonly'])
							</div>
						@endif

					</div> <!-- End of col-9 -->

					<div class="col-sm-3">
						@include('admin.invoicer.invoices.edit.fields.status')
						@include('admin.invoicer.invoices.edit.fields.charged')
						@include('admin.invoicer.invoices.edit.fields.hst')
						@include('admin.invoicer.invoices.edit.fields.subtotal')
						@include('admin.invoicer.invoices.edit.fields.payments')
						@include('admin.invoicer.invoices.edit.fields.deposits')
						@include('admin.invoicer.invoices.edit.fields.discounts')
						@include('admin.invoicer.invoices.edit.fields.balance')
					</div><!-- End of col-3 -->

				</div> <!-- End of row -->

			</div><!-- End card-body -->

			<div class="card-footer">
				{!! Config::get('settings.formFieldsRequired') !!}
			</div>

		</div>

	</form>

		
	@include('admin.invoicer.invoices.edit.billables')

	@if ($invoice->invoiceItems->count() > 0)
		@include('admin.invoicer.invoices.edit.activities')
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
   $("#datePickerInvoiced").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerPaid").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerWorkOrder").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerCompleted").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerShipped").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerPickedUp").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
<script>
   $("#datePickerCanceled").datetimepicker({
      step: 30,
      showOn: 'button',
      buttonImage: '',
      buttonImageOnly: true,
      format:'Y-m-d H:i'+':00'
   });
</script>
@endsection
