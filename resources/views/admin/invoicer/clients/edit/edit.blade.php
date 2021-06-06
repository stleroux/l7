@extends('layouts.admin.admin')

@section('pageHeader')
   <i class="{{ config('icons.invoicer-clients') }}"></i>
   Invoicer :: Edit Client
@endsection

@section('content')

	@include('common.form_submission_error')

	<form action="{{ route('admin.invoicer.clients.update', $client) }}" method="POST" enctype="multipart/form-data" class="">
		@csrf
		@method('PUT')
		@include('admin.invoicer.clients.edit.topbar')

		<div class="card">

			{{-- <div class="card-header">
				<span class="h3">Edit Client</span>
				<span class="float-right">
					<a href="{{ route('admin.invoicer.clients') }}" class="btn btn-sm btn-outline-secondary">
						<i class="fa fa-backward"></i>
						Cancel
					</a>
					<button type="submit" class="btn btn-sm btn-outline-success" name="submit" value="update">
						<i class="{{ config('icons.update') }}"></i>
						<div class="d-none d-lg-inline">
							Update Client
						</div>
					</button>
				</span>
			</div> --}}
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 col-md-8">
						<div class="form-group {{ $errors->has('contact_name') ? 'has-error' : '' }}">
							<label for="contact_name" class="required">Contact Name</label>
							<input type="text" name="contact_name" value="{{ $client->contact_name }}" class="form-control">
							<span class="text-danger">{{ $errors->first('contact_name') }}</span>
						</div>
						<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
							<label for="address">Address</label>
							<input type="text" name="address" value="{{ $client->address }}" class="form-control">
							<span class="text-danger">{{ $errors->first('address') }}</span>
						</div>

						<div class="row">
							<div class="col-sm-12 col-sm-6">
								<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
									<label for="city">City</label>
									<input type="text" name="city" value="{{ $client->city }}" class="form-control">
									<span class="text-danger">{{ $errors->first('city') }}</span>
								</div>
							</div>
							<div class="col-sm-12 col-sm-3">
								<div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
									<label for="state">Province</label>
									<input type="text" name="state" value="{{ $client->state }}" class="form-control">
									<span class="text-danger">{{ $errors->first('state') }}</span>
								</div>
							</div>
							<div class="col-sm-12 col-sm-3">
								<div class="form-group {{ $errors->has('zip') ? 'has-error' : '' }}">
									<label for="zip">Postal Code</label>
									<input type="text" name="zip" value="{{ $client->zip }}" class="form-control">
									<span class="text-danger">{{ $errors->first('zip') }}</span>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
									<label for="notes">Notes</label>
									<textarea name="notes" rows="3" class="form-control">{{ $client->notes }}</textarea>
									<span class="text-danger">{{ $errors->first('notes') }}</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-4">
						<div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
							<label for="company_name">Company Name</label>
							<input type="text" name="company_name" value="{{ $client->company_name }}" class="form-control" autofocus="autofocus">
							<span class="text-danger">{{ $errors->first('company_name') }}</span>
						</div>
						<div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
							<label for="telephone" class="required">Telephone</label>
							<input type="text" name="telephone" value="{{ $client->telephone }}" class="form-control">
							<span class="text-danger">{{ $errors->first('telephone') }}</span>
						</div>
						<div class="form-group {{ $errors->has('cell') ? 'has-error' : '' }}">
							<label for="cell">Cell</label>
							<input type="text" name="cell" value="{{ $client->cell }}" class="form-control">
							<span class="text-danger">{{ $errors->first('cell') }}</span>
						</div>
						<div class="form-group {{ $errors->has('fax') ? 'has-error' : '' }}">
							<label for="fax">Fax</label>
							<input type="text" name="fax" value="{{ $client->fax }}" class="form-control">
							<span class="text-danger">{{ $errors->first('fax') }}</span>
						</div>
						<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							<label for="email" class="required">Email Address</label>
							<input type="text" name="email" value="{{ $client->email }}" class="form-control">
							<span class="text-danger">{{ $errors->first('email') }}</span>
						</div>
						<div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
							<label for="website">Website</label>
							<input type="text" name="website" value="{{ $client->website }}" class="form-control">
							<span class="text-danger">{{ $errors->first('website') }}</span>
						</div>
					</div>
				</div>
			</div>

			<div class="card-footer">
				Fields marked with an<span class="required"></span> are required.
			</div>
			
		</div>
	</form>

@endsection
