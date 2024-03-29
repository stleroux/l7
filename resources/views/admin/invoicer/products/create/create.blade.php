@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ config('icons.invoicer-products') }}"></i>
   Invoicer :: Create Product
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer.products') }}">Products</a></li>
   <li class="breadcrumb-item">Create Product</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

	@include('common.form_submission_error')

	{{-- {!! Form::open(array('route'=>'invoicer.products.store')) !!} --}}
	<form action="{{ route('admin.invoicer.products.store') }}" method="POST">
		@csrf

		@include('admin.invoicer.products.create.topbar')

		<div class="card">
			
			{{-- <div class="card-header">
				<span class="h3">Create New Product</span>
				<span class="float-right">
					<a href="{{ route('admin.invoicer.products') }}" class="btn btn-sm btn-outline-secondary">
						<i class="fa fa-backward"></i>
						Cancel
					</a>

					<button type="submit" class="btn btn-sm btn-primary">
						<i class="{{ config('icons.save') }}"></i>
						Save Product
					</button>
				</span>
			</div> --}}
			
			<div class="card-body">
				<div class="row">
					<div class="col-xs-12 col-sm-3">
						<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
							{{-- {{ Form::label ('code', 'Code:', ['class'=>'required']) }} --}}
							<label for="code" class="required">Code</label>
							{{-- {{ Form::text ('code', null, array('class'=>'form-control', 'autofocus')) }} --}}
							<input type="text" name="code" class="form-control" autofocus>
							<span class="text-danger">{{ $errors->first('code') }}</span>
						</div>
					</div>
					<div class="col-xs-12 col-sm-9">
						<div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
							{{-- {{ Form::label ('details', 'Details:', ['class'=>'required'])}} --}}
							<label for="details" class="required">Details</label>
							{{-- {{ Form::text ('details', null, array('class'=>'form-control')) }} --}}
							<input type="text" name="details" class="form-control">
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
