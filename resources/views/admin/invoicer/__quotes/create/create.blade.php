@extends('layouts.admin.admin')

@section('stylesheet')
{{-- 	<style>
/* .invalid class prevents CSS from automatically applying */
.invalid input:required:invalid {
  background: #BE4C54;
}

/* Mark valid inputs during .invalid state */
.invalid input:required:valid {
  background: #17D654;
}
	</style> --}}
@endsection

@section('pageHeader')
  @if(request()->has('type') && (request()->type == "quote"))
   	<i class="{{ config('icons.invoicer-estimates') }}"></i>
   	Invoicer :: Create New Quote
  @elseif(request()->has('type') && (request()->type == "estimate"))
   	<i class="{{ config('icons.invoicer-estimates') }}"></i>
   	Invoicer :: Create New Estimate
   @else
   	<i class="{{ config('icons.invoicer-invoices') }}"></i>
   	Invoicer :: Create New Invoice
   @endif
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Create Invoice</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection
	

@section('content')
	@include('admin.invoicer.clients.createModal')

	{{-- {!! Form::open(array('route'=>'invoicer.invoices.store')) !!} --}}
	<form action="{{ route('admin.invoicer.invoices.store') }}" method="POST">
		@csrf
		
		@include('admin.invoicer.invoices.create.topbar')

		@include('common.form_submission_error')


		<div class="card">

			<div class="card-body">
				<div class="row">
					<div class="col-md-9">
						
						<div class="form-group">
							<label for="client_id" class="required">Client</label>
							<select name="client_id" class="form-control @error('client_id') is-invalid @enderror">
								@if(!empty($client))
									<option value="{{ $client->id }}" >
										{{ $client->last_name }}, {{ $client->first_name }} :: {{ $client->email }} :: {{ $client->company_name }}
									</option>
								@else
									<option value="">Select One</option>
								@endif
								@foreach($clients as $client)
									<option value="{{ $client->id }}" >
										{{ $client->last_name }}, {{ $client->first_name }} :: {{ $client->email }} {{ $client->company_name ? ' :: ' . $client->company_name . '' : '' }}
									</option>
								@endforeach
							</select>
							{{-- <span class="invalid-feedback">{{ $errors->first('client_id') }}</span> --}}
							@error('client_id')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="form-group">
							<label for="notes">Notes</label>
							<textarea name="notes" rows="4" class="form-control"></textarea>
							<span class="text-danger">{{ $errors->first('notes') }}</span>
							<small id="passwordHelpBlock" class="form-text text-muted">
								These notes will not be shown on the invoice
							</small>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label for="status" class="required">Status</label>
							
							@if(request()->has('type') && (request()->type == "quote"))
								<input type="text" name="status" value="Quote" class="form-control" readonly >
							@elseif(request()->has('type') && (request()->type == "estimate"))
								<input type="text" name="status" value="Estimate" class="form-control" readonly >
							@else
								<input type="text" name="status" value="Logged" class="form-control" readonly >
							@endif

							<span class="text-danger">{{ $errors->first('status') }}</span>
						</div>
					</div>

				</div>
			</div>

			<div class="card-footer">
				{!! Config::get('settings.formFieldsRequired') !!}
			</div>
		</div>

	</form>


@endsection
