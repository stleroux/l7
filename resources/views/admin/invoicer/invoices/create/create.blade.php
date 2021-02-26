@extends('layouts.admin.admin')

@section('stylesheet')
	<style>
/* .invalid class prevents CSS from automatically applying */
.invalid input:required:invalid {
  background: #BE4C54;
}

/* Mark valid inputs during .invalid state */
.invalid input:required:valid {
  background: #17D654;
}
	</style>
@endsection

@section('pageHeader')
   @if(request()->has('type'))
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

	{{-- {!! Form::open(array('route'=>'invoicer.invoices.store')) !!} --}}
	<form action="{{ route('admin.invoicer.invoices.store') }}" method="POST">
		@csrf
		
		@include('admin.invoicer.invoices.create.topbar')

		<div class="card">
			
			<div class="card-body">
				<div class="row">
					<div class="col-md-9">
						
						<div class="form-group {{ $errors->has('client_id') ? 'has-error' : '' }}">
							<label for="client_id" class="required">Client</label>
							<select name="client_id" class="form-control">
									@if(!empty($client))
										<option value="{{ $client->id }}" >
											{{ $client->contact_name }} :: {{ $client->email }} :: {{ $client->company_name }}
										</option>
									@else
										<option value="">Select One</option>
									@endif
								@foreach($clients as $c)
									<option value="{{ $c->id }}" >
										{{ $c->contact_name }} :: {{ $c->email }} {{ $c->company_name ? ' :: ' . $c->company_name . '' : '' }}
									</option>
								@endforeach
							</select>
							<span class="text-danger">{{ $errors->first('client_id') }}</span>
						</div>

						<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
							<label for="notes">Notes</label>
							<textarea name="notes" rows="4" class="form-control"></textarea>
							<span class="text-danger">{{ $errors->first('notes') }}</span>
							<small id="passwordHelpBlock" class="form-text text-muted">
								These notes will not be shown on the invoice
							</small>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
							<label for="status" class="required">Status</label>
							
							@if(request()->has('type'))
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
				Fields marked with an<span class="required"></span> are required.
			</div>
		</div>

	</form>

	@include('admin.invoicer.clients.createModal')

@endsection
