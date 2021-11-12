@extends('layouts.UI.app-10-2')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/carvings.css') }}">
@stop

@section('pageHeader')
	<i class="{{ config('icons.') }} mr-1"></i>
	Custom Order Wizard
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{{ route('carvings.index') }}">Carvings</a></li>
	<li class="breadcrumb-item">Custom Order</li>
	<li class="breadcrumb-item"><a href="{{-- {{ route('carvings.customOrders.step.one') }} --}}">Step 1</a></li>
	<li class="breadcrumb-item"><a href="{{-- {{ route('carvings.customOrders.house.step.two') }} --}}">Step 2</a></li>
	<li class="breadcrumb-item"><a href="{{-- {{ route('carvings.customOrders.house.step.three') }} --}}">Step 3</a></li>
	<li class="breadcrumb-item">Step 4</li>
@endsection

@section('rightColumn')
   @include('UI.carvings.blocks.popular')
   @include('UI.carvings.blocks.general')
@endsection

@section('topbar')
	{{-- @include('UI.carvings.faq.topbar') --}}
@endsection

@section('content')

	@include('UI.carvings.customOrders.error')

	<form action="{{ route('carvings.customOrder.sign.house.size.store') }}" method="POST">
		@csrf

		<div class="row">
			<div class="col">

				<div class="card card-trans-4">
					
					<div class="card-header card-trans-2 text-dark">
						<div class="card-title font-weight-bold">
							House Number Sign :: Step 6 :: Select the desired size
						</div>
					</div> <!-- End card header -->
					
					<div class="card-body">

						<div class="form-row">
							<div class="form-group">
								<label for="height" class="">Height</label>
								<input type="number" name="height" min="5" max="32" step="1" class="form-control" value="{{ Session::get('height') ?? old('height') }}">
								<small>in inches</small>
							</div>
							<div class="form-group col-1">
								<div class="">&nbsp;</div>
								<div class="h3 pt-2 text-center">X</div>
							</div>
							<div class="form-group">
								<label for="width" class="">Width</label>
								<input type="number" name="width" min="5" max="32" step="1" class="form-control" value="{{ Session::get('width') ?? old('width') }}">
								<small>in inches</small>
							</div>
						</div>

					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col">
								<a type="button" href="{{ route('carvings.customOrder.sign.house.style.create') }}" class="btn btn-warning">
									<i class="fas fa-backward"></i>
									Back
								</a>
								<a href="{{ route('carvings.customOrder.reset') }}" class="btn btn-info">Restart</a>
							</div>
							<div class="col text-right">
								<button type="submit" class="btn btn-primary">
									Next Step
									<i class="fas fa-forward"></i>
								</button>
							</div>
						</div>
					</div>

				</div>
				
			</div>
		</div>

	</form>

@endsection
