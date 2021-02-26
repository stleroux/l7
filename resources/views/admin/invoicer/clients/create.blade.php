{{-- @extends('layouts.invoicer.app') --}}
@extends('layouts.admin.admin')

@section('content')

	{{-- {!! Form::open(array('route'=>'invoicer.clients.store')) !!} --}}
	<form action="{{ route('admin.invoicer.clients.store') }}" method="POST">
		@csrf

		<div class="card">
			
			<div class="card-header">
				<span class="h3">Create New Client</span>
				<span class="float-right">
					<a href="{{ route('admin.invoicer.clients') }}" class="btn btn-sm btn-outline-secondary">
						<i class="fa fa-backward"></i>
						Cancel
					</a>
					{{-- {{ Form::button('<i class="fa fa-save"></i> Save Client', ['class' => 'btn btn-sm btn-primary', 'type' => 'submit']) }} --}}
					<button type="submit" class="btn btn-sm btn-primary">
						<i class="fa fa-save"></i>
						Save Client
					</button>
				</span>
			</div>
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 col-md-8">
						<div class="form-group {{ $errors->has('contact_name') ? 'has-error' : '' }}">
							<label for="contact_name" class="required">Contact Name</label>
							{{-- {{ Form::label ('contact_name', 'Contact Name:', ['class'=>'required']) }} --}}
							<input type="text" name="contact_name" class="form-control">
							{{-- {{ Form::text ('contact_name', null, array('class'=>'form-control')) }} --}}
							<span class="text-danger">{{ $errors->first('contact_name') }}</span>
						</div>
						<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
							<label for="address">Address</label>
							{{-- {{ Form::label ('address', 'Address:')}} --}}
							<input type="text" name="address" class="form-control">
							{{-- {{ Form::text ('address', null, array('class'=>'form-control')) }} --}}
							<span class="text-danger">{{ $errors->first('address') }}</span>
						</div>
						<div class="row">
							<div class="col-sm-12 col-sm-6">
								<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
									<label for="city">City</label>
									{{-- {{ Form::label ('city', 'City:')}} --}}
									<input type="text" name="city" class="form-control">
									{{-- {{ Form::text ('city', null, array('class'=>'form-control')) }} --}}
									<span class="text-danger">{{ $errors->first('city') }}</span>
								</div>
							</div>
							<div class="col-sm-12 col-sm-3">
								<div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
									<label for="state">Province</label>
									{{-- {{ Form::label ('state', 'Province:')}} --}}
									<input type="text" name="state" class="form-control">
									{{-- {{ Form::text ('state', null, array('class'=>'form-control')) }} --}}
									<span class="text-danger">{{ $errors->first('state') }}</span>
								</div>
							</div>
							<div class="col-sm-12 col-sm-3">
								<div class="form-group {{ $errors->has('zip') ? 'has-error' : '' }}">
									<label for="zip">Postal Code</label>
									{{-- {{ Form::label ('zip', 'Postal Code:')}} --}}
									<input type="text" name="zip" class="form-control">
									{{-- {{ Form::text ('zip', null, array('class'=>'form-control')) }} --}}
									<span class="text-danger">{{ $errors->first('zip') }}</span>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
									<label for="notes">Notes</label>
									{{-- {{ Form::label ('notes', 'Notes:')}} --}}
									<textarea name="notes" rows="4" class="form-control"></textarea>
									{{-- {{ Form::textarea ('notes', null, array('class'=>'form-control', 'rows'=>4)) }} --}}
									<span class="text-danger">{{ $errors->first('notes') }}</span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-4">
						<div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
							<label for="company_name">Company Name</label>
							{{-- {{ Form::label ('company_name', 'Company Name:', ['class'=>'required']) }} --}}
							<input type="text" name="company_name" class="form-control" autofocus>
							{{-- {{ Form::text ('company_name', null, array('class'=>'form-control', 'autofocus'=>'autofocus')) }} --}}
							<span class="text-danger">{{ $errors->first('company_name') }}</span>
						</div>
						<div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
							<label for="telephone" class="required">Telephone</label>
							{{-- {{ Form::label ('telephone', 'Telephone:')}} --}}
							<input type="text" name="telephone" class="form-control">
							{{-- {{ Form::text ('telephone', null, array('class'=>'form-control')) }} --}}
							<span class="text-danger">{{ $errors->first('telephone') }}</span>
						</div>
						<div class="form-group {{ $errors->has('cell') ? 'has-error' : '' }}">
							<label for="cell">Cell</label>
							{{-- {{ Form::label ('cell', 'Cell:')}} --}}
							<input type="text" name="cell" class="form-control">
							{{-- {{ Form::text ('cell', null, array('class'=>'form-control')) }} --}}
							<span class="text-danger">{{ $errors->first('cell') }}</span>
						</div>
						<div class="form-group {{ $errors->has('fax') ? 'has-error' : '' }}">
							<label for="fax">Fax</label>
							{{-- {{ Form::label ('fax', 'Fax:')}} --}}
							<input type="text" name="fax" class="form-control">
							{{-- {{ Form::text ('fax', null, array('class'=>'form-control')) }} --}}
							<span class="text-danger">{{ $errors->first('fax') }}</span>
						</div>
						<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							<label for="email" class="required">Email</label>
							{{-- {{ Form::label ('email', 'Email Address:', ['class'=>'required'])}} --}}
							<input type="text" name="email" class="form-control">
							{{-- {{ Form::text ('email', null, array('class'=>'form-control')) }} --}}
							<span class="text-danger">{{ $errors->first('email') }}</span>
						</div>
						<div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
							<label for="website">Website</label>
							{{-- {{ Form::label ('website', 'Website Address:')}} --}}
							<input type="text" name="website" class="form-control">
							{{-- {{ Form::text ('website', null, array('class'=>'form-control')) }} --}}
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
