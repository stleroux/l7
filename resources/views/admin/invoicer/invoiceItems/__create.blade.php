@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.add') }}"></i>
   Invoicer :: Add Billable Item
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Create Invoice</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section('content')

	{{-- {!! Form::open(array('route'=>'invoicer.invoiceItems.store')) !!} --}}
	<form action="{{ route('admin.invoicer.invoiceItems.store') }}" method="POST">
		@csrf
		{{-- {{ Form::hidden ('invoice_id', $invoice->id) }} --}}
		<input type="hidden" name="invoice_id" value="{{ $invoice->id }}">

		<div class="card">
			
			<div class="card-header">
				<span class="h3">Add Billable Item to Invoice : {{ $invoice->id }}</span>
				<span class="float-right">
					<a href="{{ route('admin.invoicer.invoices.edit', $invoice->id) }}" class="btn btn-sm btn-outline-secondary">
						<i class="fa fa-backward"></i>
						Cancel
					</a>
					{{-- {{ Form::button('<i class="fa fa-save"></i> Add Billable', ['class' => 'btn btn-sm btn-primary', 'type' => 'submit']) }} --}}
					<button type="submit" name="submit" class="btn btn-sm btn-primary">
						<i class="{{ Config::get('icons.save') }}"></i>
						Add Billable
					</button>
				</span>
			</div>
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-8">
						<div class="form-group {{ $errors->has('product_id') ? 'has-error' : '' }}">
							{{-- {{ Form::label('product_id', 'Product', ['class'=>'required']) }} --}}
							<label for="product_id" class="required">Product</label>
							{{-- {{ Form::select('product_id', $products, [], ['class'=>'form-control', 'autofocus', 'placeholder'=>'Select']) }} --}}
							<select name="product_id" class="form-control">
								<option value="" autofocus>Select One</option>
								@foreach($products as $product)
									<option value="{{ $product->id }}">{{ $product->code }}</option>
								@endforeach
							</select>
							<span class="text-danger">{{ $errors->first('product') }}</span>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
							{{-- {{ Form::label ('quantity', 'Quantity', ['class'=>'required']) }} --}}
							<label for="quantity" class="required">Quantity</label>
							{{-- {{ Form::text ('quantity', null, ['class'=>'form-control']) }} --}}
							<input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}">
							<span class="text-danger">{{ $errors->first('quantity') }}</span>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
							{{-- {{ Form::label ('price', 'Price', ['class'=>'required']) }} --}}
							<label for="price" class="required">Price</label>
							<div class="input-group">
								{{-- {{ Form::text ('price', null, ['class'=>'form-control text-right']) }} --}}
								<input type="text" name="price" value="{{ old('price') }}" class="form-control text-right">
								<div class="input-group-append">
									<span class="input-group-text">$</span>
								</div>
							</div>
							<span class="text-danger">{{ $errors->first('price') }}</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8">
						<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
							{{-- {{ Form::label ('notes', 'Notes:') }} --}}
							<label for="notes">Notes</label>
							{{-- {{ Form::textarea ('notes', null, array('class'=>'form-control')) }} --}}
							<textarea name="notes" rows="4" class="form-control">{{ old('notes') }}</textarea>
							<span class="text-danger">{{ $errors->first('notes') }}</span>
							<small id="passwordHelpBlock" class="form-text text-muted">
								These notes will be shown on the invoice
							</small>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group {{ $errors->has('work_date') ? 'has-error' : '' }}">
							{{-- {{ Form::label ('work_date', 'Work Date:', ['class'=>'required'])}} --}}
							<label for="work_date" class="required">Work Date</label>
							<div class="input-group">
								{{-- {{ Form::date ('work_date', null, array('class'=>'form-control')) }} --}}
								<input type="text" name="work_date" id="datePicker" class="form-control" value="{{ old('work_date') }}">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="far fa-calendar-alt"></i>
									</span>
								</div>
							</div>
							<span class="text-danger">{{ $errors->first('work_date') }}</span>
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
