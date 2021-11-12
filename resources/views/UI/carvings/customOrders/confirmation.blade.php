@extends('layouts.UI.app-10-2')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
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

@php
	// dd(session()->all());
@endphp

<div class="card card-trans-4">
	
	<div class="card-header card-trans-2 text-dark">
		<div class="card-title font-weight-bold">
			Selection Confirmation
		</div>
	</div> <!-- End card header -->

	<div class="card-body">
		<div class="row">
			<div class="col-6">
				<table class="table table-hover table-striped table-sm">
					<tbody>
						<tr>
							<th>Item</th>
							<td>{{ ucfirst(Session::get('item')) }}</td>
						</tr>
						<tr>
							<th>Sign Type</th>
							<td>{{ ucfirst(Session::get('signType')) }}</td>
						</tr>
						<tr>
							<th>Material</th>
							<td>
								@php
									if(preg_match('/[A-Z]/', Session::get('material'))) {
										$material = preg_split('/(?=[A-Z])/', Session::get('material'));
								@endphp
									{{ ucfirst($material[0]) }} {{ ucfirst($material[1]) }}
								@php } else { @endphp
									{{ ucfirst(Session::get('material')) }}	
								@php } @endphp
							</td>							
						</tr>
						<tr>
							<th>Pattern</th>
							<td>{{ Session::get('pattern') }}</td>
						</tr>
						<tr>
							<th>Style</th>
							<td>{{ Session::get('style') }}</td>
						</tr>
						<tr>
							<th>Size</th>
							<td>{{ Session::get('height') }} <small>high</small> X {{ Session::get('width') }} <small>wide</small></td>
						</tr>
						<tr>
							<th>Number</th>
							<td>{{ Session::get('number') }}</td>
						</tr>
						<tr>
							<th>Font</th>
							<td>{{ Session::get('font') }}</td>
						</tr>
						<tr>
							<th>Color</th>
							<td>{{ Session::get('color') }}</td>
						</tr>
						<tr>
							<th>Finish</th>
							<td>{{ Session::get('finish') }}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<div class="card-footer">
		<a href="{{ route('carvings.customOrder.sign.house.finish.create') }}" class="btn btn-warning">Back</a>
		<a href="{{ route('carvings.customOrder.reset') }}" class="btn btn-primary">Restart</a>
		<a href="#" class="btn btn-success">Confirm</a>
	</div>

</div>

@endsection
