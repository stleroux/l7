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
   <i class="{{ config('icons.add') }}"></i>
   Invoicer :: Create New Invoice
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
			
{{-- 			<div class="card-header">
				<span class="h3">Create New Invoice</span>
				<span class="float-right">
					<a href="{{ route('admin.invoicer.invoices') }}" class="btn btn-sm btn-outline-secondary">
						<i class="fas fa-backward"></i>
						Cancel
					</a>
					<button type="submit" name="save" class="btn btn-sm btn-primary">
						<i class="{{ config('icons.save') }}"></i>
						Save Invoice
					</button>
				</span>
			</div> --}}
			
			<div class="card-body">
				<div class="row">
					<div class="col-md-9">
						
						<div class="form-group {{ $errors->has('client_id') ? 'has-error' : '' }}">
							{{-- {{ Form::label('client_id', 'Client', ['class'=>'required']) }} --}}
							<label for="client_id" class="required">Client</label>
							{{-- <select name="client_id" class="form-control">
								@foreach($clients as $c)
									<option value="{{ $c->id }}">{{ $c->company_name }}</option>
								@endforeach
							</select> --}}
							{{-- @if(!empty($client)) --}}
							{{-- @php
								dd($client->id);
							@endphp --}}
								<select name="client_id" class="form-control">
										@if(!empty($client))
											<option value="{{ $client->id }}" >{{ $client->contact_name }} :: {{ $client->company_name }}</option>
										@else
											<option value="" >Select One</option>
										@endif
									@foreach($clients as $c)
										<option value="{{ $c->id }}" >{{ $c->contact_name ? $c->contact_name . ' :: ' : '' }} {{ $c->company_name }}</option>
									@endforeach
								</select>
								{{-- {{ $client }} --}}
								{{-- {{ Form::select('client_id', $clients, [$client->id], ['class'=>'form-control', 'placeholder'=>'Select']) }} --}}
								
							{{-- @else --}}
								{{-- {{ Form::select('client_id', $clients, [], ['class'=>'form-control', 'placeholder'=>'Select']) }} --}}
							{{-- @endif --}}
							<span class="text-danger">{{ $errors->first('client_id') }}</span>
						</div>

						<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
							{{-- {{ Form::label ('notes', 'Notes:') }} --}}
							<label for="notes">Notes</label>
							{{-- {{ Form::textarea ('notes', null, ['class'=>'form-control', 'rows'=>'4']) }} --}}
							<textarea name="notes" rows="4" class="form-control"></textarea>
							<span class="text-danger">{{ $errors->first('notes') }}</span>
							<small id="passwordHelpBlock" class="form-text text-muted">
								These notes will not be shown on the invoice
							</small>
						</div>
					</div>
					<div class="col-md-3">
						{{-- <div class="form-group {{ $errors->has('work_date') ? 'has-error' : '' }}">
							{{ Form::label ('work_date', 'Work Date:', ['class'=>'required'])}}
							<div class="input-group">
								{{ Form::date ('work_date', null, array('class'=>'form-control')) }}
								<div class="input-group-addon">
									<i class="fa fa-calendar" aria-hidden="true"></i>
								</div>
							</div>
							<span class="text-danger">{{ $errors->first('work_date') }}</span>
						</div> --}}

						<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
							{{-- {{ Form::label ('status', 'Status', ['class'=>'required']) }} --}}
							<label for="status" class="required">Status</label>
							{{-- {{ Form::select('status', ['invoiced'=>'Invoiced', 'logged'=>'Logged'], null, ['placeholder'=>'Pick one...', 'class'=>'form-control']) }} --}}
							{{-- <select name="status" class="form-control">
								<option value="logged">Logged</option>
								<option value="invoiced">Invoiced</option>
							</select> --}}
							<input type="text" name="status" value="logged" class="form-control" readonly >
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


