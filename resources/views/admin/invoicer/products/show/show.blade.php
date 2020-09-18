@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
   <i class="{{ Config::get('icons.invoicer-products') }}"></i>
   Invoicer :: Product Information
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
   <li class="breadcrumb-item">Product Information</li>
@endsection

@section('rightSidebar')
@endsection

@section('right_column')
@endsection

@section('content')

	@include('admin.invoicer.products.show.topbar')

		<div class="card">
			
{{-- 			<div class="card-header">
				<span class="h3">Product Information</span>
				<span class="float-right">
					<a href="{{ route('admin.invoicer.products') }}" class="btn btn-sm btn-primary">
						<i class="fa fa-list"></i>
						Products List
					</a>
				</span>
			</div> --}}
			
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="code">Code:</label>
							{{-- {{ Form::text ('code', $product->code, array('class'=>'form-control', 'readonly')) }} --}}
							<input type="text" name="code" value="{{ $product->code }}" class="form-control" readonly>
						</div>
						<div class="form-group">
							{{-- {{ Form::label ('details', 'Details:')}} --}}
							<label for="details">Details:</label>
							{{-- {{ Form::text ('details', $product->details, ['class'=>'form-control', 'readonly']) }} --}}
							<input type="text" name="details" value="$product->details" class="form-control" readonly="">
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
