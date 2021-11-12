@extends('layouts.UI.app-10-2')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/carvings.css') }}">
@stop

@section('pageHeader')
	{{-- <i class="{{ config('icons.') }} mr-1"></i> --}}
	<i class="fas fa-hat-wizard mr-1"></i>
	Custom Order Wizard
@endsection

@section('breadcrumb')
	<li class="breadcrumb-item"><a href="{{ route('carvings.index') }}">Carvings</a></li>
	<li class="breadcrumb-item">Wizard Step 1</li>
@endsection

@section('rightColumn')
   @include('UI.carvings.blocks.popular')
   @include('UI.carvings.blocks.general')
@endsection

@section('topbar')
	{{-- @include('UI.carvings.faq.topbar') --}}
@endsection

@section('content')
	<div class="alert alert-warning mb-2">This is a work in progress.</div>

	@include('UI.carvings.customOrders.error')

	<form action="{{ route('carvings.customOrder.store') }}" method="POST">
		@csrf

		<div class="card card-trans-4">
			
			<div class="card-header card-trans-2 text-dark">
				<div class="card-title font-weight-bold">
					Step 1 :: Select the desired item
				</div>
			</div> <!-- End card header -->

			<div class="card-body">

				<div class="row text-center">

					<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
						<div class="mb-1">Accessories</div>
						<div><i class="fas fa-box fa-5x"></i></div>
						<div><input disabled type="radio" name="item" id="accessory" value="accessory" {{ Session::get('item') == "accessory" ? 'checked' : '' }} /></div>
					</label>

					<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
						<div class="mb-1">Catch All Trays</div>
						<div><i class="fab fa-trello fa-5x"></i></div>
						<input disabled type="radio" name="item" id="tray" value="tray" {{ Session::get('item') == "tray" ? 'checked' : '' }} />
					</label>

					<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
						<div class="mb-1">Others</div>
						<div><i class="fas fa-question fa-5x"></i></div>
						<input disabled type="radio" name="item" id="other" value="other" {{ Session::get('item') == "other" ? 'checked' : '' }} />
					</label>
					
					<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
						<div class="mb-1">Plaques</div>
						<div><i class="fas fa-shield-alt fa-5x"></i></div>
						<input disabled type="radio" name="item" id="plaque" value="plaque" {{ Session::get('item') == "plaque" ? 'checked' : '' }} />
					</label>

					<label class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 col-h">
						<div class="mb-1">Signs</div>
						<div><i class="fas fa-sign fa-5x"></i></div>
						<input type="radio" name="item" id="sign" value="sign" {{ Session::get('item') == "sign" ? 'checked' : '' }} />
					</label>

				</div>

			</div> <!-- End card body -->
			
			<div class="card-footer">
				<a href="{{ route('carvings.customOrder.reset') }}" class="btn btn-info">Reset</a>
				<div class="float-right">
					<button type="submit" class="btn btn-primary">
						Next Step
						<i class="fas fa-forward"></i>
					</button>
				</div>
			</div> <!-- End card footer -->

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
