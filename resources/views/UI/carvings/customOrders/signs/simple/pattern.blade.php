@extends('layouts.UI.app-10-2')

@section('stylesheet')
	{{-- <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}"> --}}
	<link rel="stylesheet" href="{{ asset('css/UI/carvings.css') }}">
	<style>
/*		img {
	display: block;
	max-width: 100%;
	height: auto;
}*/
	</style>
@stop

@section('pageHeader')
	<i class="{{ config('icons.') }} mr-1"></i>
	Custom Order Wizard
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{{ route('carvings.index') }}">Carvings</a></li>
	<li class="breadcrumb-item">Custom Order</li>
	<li class="breadcrumb-item"><a href="{{-- {{ route('carvings.customOrders.step.one') }} --}}">Step 1</a></li>
	<li class="breadcrumb-item"><a href="{{-- {{ route('carvings.customOrders.sign.house.step.two') }} --}}">Step 2</a></li>
	<li class="breadcrumb-item">Step 3</li>
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

	<form action="{{ route('carvings.customOrder.sign.house.pattern.store') }}" method="POST">
		@csrf
		
		<div class="row">
			<div class="col">

				<div class="card card-trans-4">

					<div class="card-header card-trans-2 text-dark">
						<div class="card-title font-weight-bold">
							House Number Sign :: Step 4 :: Select the desired pattern
						</div>
					</div> <!-- End card header -->
					
					<div class="card-body">

						<div class="row text-center">
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Design 1</div>
								<div><img src="{{ asset('customOrders/signs/patterns/pattern_1.png') }}" class="img-fluid" /></div>
								<div><input type="radio" name="pattern" id="1" value="1" {{ Session::get('pattern') == "1" ? 'checked' : '' }} /></div>
							</label>
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Design 2</div>
								<div><img src="{{ asset('customOrders/signs/patterns/pattern_2.png') }}" class="img-fluid" /></div>
								<div><input type="radio" name="pattern" id="2" value="2" {{ Session::get('pattern') == "2" ? 'checked' : '' }} /></div>
							</label>
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Design 3</div>
								<div><img src="{{ asset('customOrders/signs/patterns/pattern_3.png') }}" class="img-fluid" /></div>
								<div><input type="radio" name="pattern" id="3" value="3" {{ Session::get('pattern') == "3" ? 'checked' : '' }} /></div>
							</label>
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Design 4</div>
								<div><img src="{{ asset('customOrders/signs/patterns/pattern_4.png') }}" class="img-fluid" /></div>
								<div><input type="radio" name="pattern" id="4" value="4" {{ Session::get('pattern') == "4" ? 'checked' : '' }} /></div>
							</label>
						</div>

					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col">
								<a type="button" href="{{ route('carvings.customOrder.sign.house.material.create') }}" class="btn btn-warning">
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

@section('scripts')
	<script>
		// set initial state
		var $checked = $('input[type="radio"]:checked');
		$checked.closest('.col-h').addClass('checked');

		// update on change
		$('input[type="radio"]').change(function() {
			$checked.prop('checked', false).closest('.col-h').removeClass('checked');
			$checked = $(this);
			$checked.closest('.col-h').addClass('checked');
		});
	</script>
@endsection
