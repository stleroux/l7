@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.add') }}"></i>
   Invoicer :: Add Billable Item to Invoice : {{ $invoice->id }}
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

	<form action="{{ route('admin.invoicer.invoiceItems.store') }}" method="POST">
		@csrf
		<input type="hidden" name="invoice_id" value="{{ $invoice->id }}">
		
		@include('admin.invoicer.invoiceItems.create.topbar')

		<div class="card">

			<div class="card-body">
				<div class="row">
					
					<div class="col-8">
						<div class="row">
							
							<div class="col-2 border-top border-bottom border-left border-dark bg-dark">
								<div class="h-100 d-flex justify-content-center align-items-center">
									<div class="h2 text-center">
										Select One
										<br />
										OR
										<br />
										Enter Item
									</div>
								</div>
							</div>
							
							<div class="col-10 border-top border-bottom border-right border-dark">
								
								<div class="form-group {{ $errors->has('carving') ? 'has-error' : '' }}">
									<label for="carving" class="col-form-label">Carving</label>
									<select name="carving" class="form-control">
										<option value="" autofocus>Select One</option>
										@foreach($carvings as $carving)
											{{-- <option value="{{ ucwords($carving->name) }}">{{ ucwords($carving->name) }}</option> --}}
											<option value="{{ ucwords($carving->name) }}" @if(old('carving') == ucwords($carving->name)) selected @endif>{{ ucwords($carving->name) }}</option>
										@endforeach
									</select>
									<span class="text-danger">{{ $errors->first('carving') }}</span>
								</div>
								

								<div class="form-group {{ $errors->has('product') ? 'has-error' : '' }}">
									<label for="product" class="">Product</label>
									<select name="product" class="form-control">
										<option value="" autofocus>Select One</option>
										@foreach($products as $product)
											{{-- <option value="{{ ucwords($product->details) }}">{{ ucwords($product->details) }}</option> --}}
											<option value="{{ ucwords($product->details) }}" @if(old('product') == ucwords($product->details)) selected @endif>{{ ucwords($product->details) }}</option>
										@endforeach
									</select>
									<span class="text-danger">{{ $errors->first('product') }}</span>
								</div>

								<div class="form-group {{ $errors->has('item') ? 'has-error' : '' }}">
									<label for="item" class="">Item</label>
									<input type="text" name="item" class="form-control" value="{{ old('item') }}">
									<span class="text-danger">{{ $errors->first('item') }}</span>
								</div>
								<div class="">If you select more than 1 item, the last one (Item) will be used!</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="form-group {{ $errors->has('notes') ? 'has-error' : '' }}">
									<label for="notes">Notes</label>
									<textarea name="notes" rows="4" class="form-control">{{ old('notes') }}</textarea>
									<span class="text-danger">{{ $errors->first('notes') }}</span>
									<small id="passwordHelpBlock" class="form-text text-muted">
										These notes will be shown on the invoice
									</small>
								</div>
							</div>
							
						</div>
					</div>

					<div class="col-4">
						<div class="row">
							<div class="col-6">
								<div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
									<label for="quantity" class="required">Quantity</label>
									<input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}">
									<span class="text-danger">{{ $errors->first('quantity') }}</span>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
									<label for="price" class="required">Unit Price</label>
									<div class="input-group">
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
							<div class="col-6">
								<div class="form-group {{ $errors->has('work_date') ? 'has-error' : '' }}">
									<label for="work_date" class="">Work Date</label>
									<div class="input-group">
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

				</div>
			</div>

			<div class="card-footer">
				Fields marked with an<span class="required"></span> are required.
			</div>

		</div>
	
	</form>

@endsection
