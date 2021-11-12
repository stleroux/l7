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
	<li class="breadcrumb-item"><a href="{{-- {{ route('carvings.customOrders.house.step.four') }} --}}">Step 4</a></li>
	<li class="breadcrumb-item">Step 5</li>
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

	<form action="{{ route('carvings.customOrder.sign.house.number.store') }}" method="POST">
		@csrf
		
		<div class="row">
			<div class="col">

				<div class="card card-trans-4">
					
					<div class="card-header card-trans-2 text-dark">
						<div class="card-title font-weight-bold">
							House Number Sign :: Step 7 :: Enter the desired number
						</div>
					</div> <!-- End card header -->
					
					<div class="card-body">

						<div class="row text-center">
							<div class="col-2">
								<input type="text" name="number" id="number" class="form-control" value="{{ Session::get('number') ?? old('number') }}" />								
							</div>
						</div>
					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col">
								<a type="button" href="{{ route('carvings.customOrder.sign.house.size.create') }}" class="btn btn-warning">
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
