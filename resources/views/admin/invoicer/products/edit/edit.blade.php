@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.invoicer-products') }}"></i>
   Invoicer :: Edit Product
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer.products') }}">Products</a></li>
   <li class="breadcrumb-item">Edit</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	@include('common.form_submission_error')

	{{-- {!! Form::model($product, ['route'=>['invoicer.products.update', $product->id], 'method' => 'PUT']) !!} --}}
	<form action="{{ route('admin.invoicer.products.update', $product->id) }}" method="POST">
		@csrf
		@method('PUT')

		@include('admin.invoicer.products.edit.topbar')

		<div class="card">
			
			{{-- <div class="card-header">
				<span class="h3">Edit Product</span>
				<span class="float-right">
					<a href="{{ route('admin.invoicer.products') }}" class="btn btn-sm btn-outline-secondary">
						<i class="fa fa-backward"></i>
						Cancel
					</a>
					<button type="submit" class="btn btn-sm btn-primary">
						<i class="{{ config('icons.update') }}"></i>
						Update Product
					</button>
				</span>
			</div> --}}
			
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
							{{-- {{ Form::label ('code', 'Code:')}} --}}
							<label for="code" class="required">Code</label>
							{{-- {{ Form::text ('code', null, array('class'=>'form-control', 'autofocus')) }} --}}
							<input type="text" name="code" class="form-control" value="{{ $product->code }}" autofocus="">
							<span class="text-danger">{{ $errors->first('code') }}</span>
						</div>
						<div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
							{{-- {{ Form::label ('details', 'Details:')}} --}}
							<label for="details">Details</label>
							{{-- {{ Form::text ('details', null, array('class'=>'form-control')) }} --}}
							<input type="text" name="details" class="form-control" value="{{ $product->details }}">
							<span class="text-danger">{{ $errors->first('details') }}</span>
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
