@extends('layouts.UI.app-10-2')

@section('stylesheet')
	{{-- <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}"> --}}
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
	<li class="breadcrumb-item">Step 2</li>
@endsection

@section('rightColumn')
   @include('UI.carvings.blocks.popular')
   @include('UI.carvings.blocks.general')
@endsection

@section('topbar')
	{{-- @include('UI.carvings.faq.topbar') --}}
	{{-- {{ request()->headers->get('referer') }} --}}
@endsection

@section('content')

	@include('UI.carvings.customOrders.error')
	
	<form action="{{ route('carvings.customOrder.sign.type.store') }}" method="POST">
		@csrf
	
		<div class="row">
			<div class="col">

				<div class="card card-trans-4">
					
					<div class="card-header card-trans-2 text-dark">
						<div class="card-title font-weight-bold">
							Signs :: Step 2 :: Select the type of sign
						</div>
					</div> <!-- End card header -->
					
					<div class="card-body">

						<div class="row text-center">
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">House Number</div>
								<div><i class="fas fa-home fa-5x"></i></div>
								<div><input type="radio" name="signType" id="house" value="house" {{ Session::get('signType') == "house" ? 'checked' : '' }} /></div>
							</label>
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Simple Saying</div>
								<div><i class="far fa-comment-dots fa-5x"></i></div>
								<div><input disabled type="radio" name="signType" id="simple" value="simple"{{ Session::get('signType') == "simple" ? 'checked' : '' }} /></div>
							</label>
							<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
								<div class="mb-1">Saying with Graphic</div>
								<div><i class="far fa-address-card fa-5x"></i></div>
								<div><input disabled type="radio" name="signType" id="graphic" value="graphic" {{ Session::get('signType') == "graphic" ? 'checked' : '' }} /></div>
							</label>
						</div>
					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col">
								<a href="{{ route('carvings.customOrder.create') }}" class="btn btn-warning">
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
