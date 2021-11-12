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
	<li class="breadcrumb-item">Step 2</li>
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

	<form action="{{ route('carvings.customOrder.sign.simple.material.store') }}" method="POST">
		@csrf
	
		<div class="row">
			<div class="col">

				<div class="card card-trans-4">
					
					<div class="card-header card-trans-2 text-dark">
						<div class="card-title font-weight-bold">
							House Number Sign :: Step 3 :: Select the desired wood (Simple)
						</div>
					</div> <!-- End card header -->
					
					<div class="card-body">
						@include('UI.carvings.customOrders.partials.materials')
					</div>

					<div class="card-footer">
						<div class="row">
							<div class="col">
								<a href="{{ route('carvings.customOrder.sign.type.create') }}" class="btn btn-warning">
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
